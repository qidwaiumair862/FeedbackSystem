<?php
session_start();
require_once 'db.php';

// Require login and course match
if (!isset($_SESSION['user_email']) || !isset($_SESSION['course']) || $_SESSION['course'] !== 'BCA') {
    header("Location: feedback_login.php");
    exit();
}

$success = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION['user_email'];
    $name = $_SESSION['user_name'] ?? '';
    $feedback = trim($_POST['feedback'] ?? '');

    if ($feedback === '') {
        $error = 'Please enter feedback.';
    } else {
        $stmt = $conn->prepare("INSERT INTO feedback_bca (name, email, course, feedback) VALUES (?, ?, ?, ?)");
        $course = 'BCA';
        $stmt->bind_param("ssss", $name, $email, $course, $feedback);
        if ($stmt->execute()) {
            $success = "Thank you! Your feedback has been submitted.";
        } else {
            $error = "DB error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BCA Feedback</title>
<style>
  body{font-family:Poppins,Arial;background:linear-gradient(135deg,#0b1220,#071224);color:#fff;display:flex;align-items:center;justify-content:center;height:100vh;margin:0}
  .card{background:rgba(255,255,255,0.04);padding:28px;border-radius:12px;width:430px;box-shadow:0 12px 30px rgba(0,0,0,0.6)}
  h2{color:#ffb86b;margin:0 0 14px}
  input,textarea{width:100%;padding:10px;border-radius:8px;border:none;margin-bottom:12px}
  textarea{height:110px;resize:none}
  button{background:#ffb86b;color:#000;border:none;padding:11px;border-radius:8px;font-weight:700;cursor:pointer;width:100%}
  .msg{padding:8px;border-radius:8px;margin-bottom:12px}
  .success{background:rgba(72,187,120,0.12);color:#bff5cf}
  .error{background:rgba(255,99,99,0.12);color:#ffdada}
  .small{font-size:13px;color:#cbd5e1;margin-top:8px;text-align:center}
</style>
</head>
<body>
  <div class="card">
    <h2>BCA Feedback</h2>

    <?php if($success): ?><div class="msg success"><?=htmlspecialchars($success)?></div><?php endif; ?>
    <?php if($error): ?><div class="msg error"><?=htmlspecialchars($error)?></div><?php endif; ?>

    <form method="post">
      <input type="text" value="<?=htmlspecialchars($_SESSION['user_name'] ?? '')?>" readonly>
      <input type="email" value="<?=htmlspecialchars($_SESSION['user_email'])?>" readonly>
      <textarea name="feedback" placeholder="Write your feedback..." required></textarea>
      <button type="submit">Submit Feedback</button>
    </form>

    <div class="small"><a href="logout.php" style="color:#ffd1a1;text-decoration:none">Logout</a> • <a href="index.php" style="color:#ffd1a1;text-decoration:none">Back Home</a></div>
  </div>
</body>
</html>
