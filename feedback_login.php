<?php
// feedback_login.php
session_start();
require_once 'db.php';

$signup_msg = '';
$login_msg = '';

// Helper: normalise course value -> used for table names and redirects
function course_key($v) {
    $v = strtoupper(trim($v));
    // accept "BCOM" or "B.COM"
    if ($v === 'B.COM') $v = 'BCOM';
    return $v; // BCA, BBA, MBA, BCOM
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // SIGNUP
    if (isset($_POST['signup'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $course = course_key($_POST['course'] ?? '');

        if (!$name || !$email || !$password || !$course) {
            $signup_msg = "Please fill all fields.";
        } else {
            $table = strtolower($course) . "_users"; // e.g. bca_users

            // Create table if not exists (safety)
            $create_sql = "CREATE TABLE IF NOT EXISTS `$table` (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(150),
                email VARCHAR(150) UNIQUE,
                password VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB;";
            $conn->query($create_sql);

            // Hash password for new users
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            // insert user (prepared)
            $stmt = $conn->prepare("INSERT INTO `$table` (name, email, password) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("sss", $name, $email, $hashed);
                if ($stmt->execute()) {
                    $signup_msg = "Signup successful! Please login below.";
                } else {
                    // unique constraint or other error
                    $signup_msg = "Signup failed: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $signup_msg = "Database error: " . $conn->error;
            }
        }
    }

    // LOGIN
    if (isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $course = course_key($_POST['course'] ?? '');

        if (!$email || !$password || !$course) {
            $login_msg = "Please fill all fields.";
        } else {
            $table = strtolower($course) . "_users";
            // safety: ensure table exists
            $check_sql = "SHOW TABLES LIKE '" . $conn->real_escape_string($table) . "'";
            $res = $conn->query($check_sql);
            if ($res && $res->num_rows === 1) {
                $stmt = $conn->prepare("SELECT id, name, email, password FROM `$table` WHERE email = ? LIMIT 1");
                if ($stmt) {
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($row = $result->fetch_assoc()) {
                        $stored = $row['password'];
                        $ok = false;
                        // First try password_verify (for hashed)
                        if (password_verify($password, $stored)) {
                            $ok = true;
                        } else {
                            // fallback: accept plaintext if that was stored previously
                            if ($password === $stored) $ok = true;
                        }

                        if ($ok) {
                            // login success
                            $_SESSION['user_email'] = $row['email'];
                            $_SESSION['user_name'] = $row['name'];
                            $_SESSION['course'] = $course; // BCA, BBA, MBA, BCOM

                            // redirect to that course feedback page
                            $redir = strtolower($course) . "_feedback.php"; // e.g. bca_feedback.php
                            header("Location: $redir");
                            exit();
                        } else {
                            $login_msg = "Invalid email / password for selected course.";
                        }
                    } else {
                        $login_msg = "No account found with that email in $course.";
                    }
                    $stmt->close();
                } else {
                    $login_msg = "Database error: " . $conn->error;
                }
            } else {
                $login_msg = "No users registered yet for $course. Please Signup first.";
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Feedback — Signup / Login</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    /* Simple fadu styling (keeps consistent with your site) */
    :root { --accent: #ff6600; --bg: #0f1724; }
    *{box-sizing:border-box}
    body{margin:0; font-family:Poppins,Arial; background:linear-gradient(135deg,#071427,#112240); color:#fff; min-height:100vh; display:flex; align-items:center; justify-content:center;padding:20px;}
    .card{background:rgba(255,255,255,0.06); padding:28px; border-radius:14px; width:420px; box-shadow:0 10px 30px rgba(0,0,0,0.6);}
    h2{margin:0 0 14px; color:var(--accent); text-align:center}
    .tabs{display:flex; gap:8px; margin-bottom:16px}
    .tabs button{flex:1; padding:10px; border-radius:8px; border:none; cursor:pointer; background:#122235; color:#fff}
    .tabs button.active{background:var(--accent); color:#000; font-weight:700}
    form{display:none}
    form.active{display:block}
    label{display:block; font-size:13px; margin:8px 0 6px; color:#e6eef8}
    input, select{width:100%; padding:10px; border-radius:8px; border:none; margin-bottom:10px}
    .note{font-size:13px; color:#cbd5e1; text-align:center; margin-top:8px}
    .msg{padding:8px 10px; border-radius:8px; margin-bottom:10px; font-size:14px;}
    .msg.success{background:rgba(34,197,94,0.15); color:#bbf7d0}
    .msg.error{background:rgba(255,99,99,0.12); color:#ffdada}
    button[type=submit]{width:100%; padding:11px; border-radius:8px; border:none; background:var(--accent); color:#000; font-weight:700; cursor:pointer}
  </style>
</head>
<body>
  <div class="card">
    <h2>Feedback — Signup / Login</h2>

    <div class="tabs">
      <button id="tabSignup" class="active">Create Account</button>
      <button id="tabLogin">Login</button>
    </div>

    <?php if($signup_msg): ?><div class="msg <?=(strpos($signup_msg,'successful')!==false)?'success':'error'?>"><?=htmlspecialchars($signup_msg)?></div><?php endif; ?>
    <?php if($login_msg): ?><div class="msg error"><?=htmlspecialchars($login_msg)?></div><?php endif; ?>

    <!-- SIGNUP -->
    <form id="signupForm" class="active" method="POST" novalidate>
      <label>Full name</label>
      <input name="name" type="text" required>

      <label>Email</label>
      <input name="email" type="email" required>

      <label>Password</label>
      <input name="password" type="password" required>

      <label>Course</label>
      <select name="course" required>
        <option value="">-- Select Course --</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
        <option value="BCOM">B.Com</option>
      </select>

      <button type="submit" name="signup">Create account</button>
      <div class="note">After signup please login from the Login tab.</div>
    </form>

    <!-- LOGIN -->
    <form id="loginForm" method="POST" novalidate>
      <label>Email</label>
      <input name="email" type="email" required>

      <label>Password</label>
      <input name="password" type="password" required>

      <label>Course</label>
      <select name="course" required>
        <option value="">-- Select Course --</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
        <option value="BCOM">B.Com</option>
      </select>

      <button type="submit" name="login">Login & Go to Feedback</button>
      <div class="note">Login will open feedback page specific to your course.</div>
    </form>
  </div>

<script>
  const tabSignup = document.getElementById('tabSignup');
  const tabLogin = document.getElementById('tabLogin');
  const signupForm = document.getElementById('signupForm');
  const loginForm = document.getElementById('loginForm');

  tabSignup.onclick = () => {
    tabSignup.classList.add('active');
    tabLogin.classList.remove('active');
    signupForm.classList.add('active');
    loginForm.classList.remove('active');
  };
  tabLogin.onclick = () => {
    tabLogin.classList.add('active');
    tabSignup.classList.remove('active');
    loginForm.classList.add('active');
    signupForm.classList.remove('active');
  };
</script>
</body>
</html>
