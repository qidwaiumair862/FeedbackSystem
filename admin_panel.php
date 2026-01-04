<?php
// admin_feedback.php
session_start();
require_once 'db.php';

// ---------- ADMIN AUTH CHECK ----------
/*
 If your admin login sets some other session variable, replace this check accordingly.
 Example in admin_login.php you may have: $_SESSION['admin_logged_in'] = true;
*/
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}


// ---------- HANDLE DELETE REQUEST ----------
$allowed_tables = [
    'feedback_bca' => 'BCA',
    'feedback_bba' => 'BBA',
    'feedback_mba' => 'MBA',
    'feedback_bcom' => 'BCOM'
];

$delete_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'], $_POST['table'])) {
    $id = intval($_POST['delete_id']);
    $table = $_POST['table'];

    if (!array_key_exists($table, $allowed_tables)) {
        $delete_msg = "Invalid table.";
    } else {
        // Prepared statement for deletion
        $stmt = $conn->prepare("DELETE FROM `$table` WHERE id = ?");
        if ($stmt) {
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                $delete_msg = "Record deleted from " . htmlspecialchars($allowed_tables[$table]) . ".";
            } else {
                $delete_msg = "Delete failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $delete_msg = "DB error: " . $conn->error;
        }
    }
}

// ---------- FETCH DATA FUNCTION ----------
function fetch_rows($conn, $table) {
    $rows = [];
    $safe = $conn->real_escape_string($table);
    $sql = "SELECT id, name, email, course, feedback, submitted_at FROM `$safe` ORDER BY submitted_at DESC";
    if ($res = $conn->query($sql)) {
        while ($r = $res->fetch_assoc()) $rows[] = $r;
        $res->free();
    }
    return $rows;
}

$bca_rows = fetch_rows($conn, 'feedback_bca');
$bba_rows = fetch_rows($conn, 'feedback_bba');
$mba_rows = fetch_rows($conn, 'feedback_mba');
$bcom_rows = fetch_rows($conn, 'feedback_bcom');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin — View Feedback</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
  :root{--accent:#ff6600;--bg:#071427;--card:rgba(255,255,255,0.04)}
  *{box-sizing:border-box}
  body{margin:0;font-family:Inter,system-ui,Arial,sans-serif;background:linear-gradient(180deg,#071427,#0b1a2b);color:#e6eef8;padding:24px}
  .wrap{max-width:1100px;margin:0 auto}
  header{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}
  header h1{color:var(--accent);margin:0;font-size:20px}
  .msg{padding:10px;border-radius:8px;margin-bottom:12px}
  .msg.info{background:rgba(255,255,255,0.03);color:#cfe8ff}
  .msg.success{background:rgba(72,187,120,0.12);color:#bff5cf}
  .msg.error{background:rgba(255,99,99,0.08);color:#ffdada}

  .tabs{display:flex;gap:8px;margin-bottom:14px;flex-wrap:wrap}
  .tab-btn{background:#0f2a44;color:#fff;padding:10px 12px;border-radius:10px;border:none;cursor:pointer}
  .tab-btn.active{background:var(--accent);color:#000;font-weight:700}

  .panel{background:var(--card);padding:14px;border-radius:12px;box-shadow:0 8px 30px rgba(0,0,0,0.6)}
  table{width:100%;border-collapse:collapse;font-size:14px}
  thead th{background:rgba(255,255,255,0.03);padding:10px;text-align:left;font-weight:600}
  tbody td{padding:10px;border-top:1px solid rgba(255,255,255,0.03);vertical-align:top}
  .small{font-size:12px;color:#9fb3d4}
  .action-form{display:inline}
  .del-btn{background:#ff4d4f;color:#fff;border:none;padding:6px 10px;border-radius:8px;cursor:pointer}
  .del-btn:hover{opacity:0.9;transform:translateY(-1px)}
  .no-data{padding:18px;text-align:center;color:#9fb3d4}
  .top-links{display:flex;gap:8px;align-items:center}
  .top-links a{background:#0f2740;color:#fff;padding:8px 12px;border-radius:8px;text-decoration:none}
  @media(max-width:820px){
    thead th:nth-child(4), tbody td:nth-child(4) {display:none} /* hide large column on small */
  }
</style>
</head>
<body>
<div class="wrap">
  <header>
    <h1>Admin Panel — Feedback Manager</h1>
    <div class="top-links">
      <a href="index.php">Back to Site</a>
      <a href="logout_admin.php">Logout</a>
    </div>
  </header>

  <?php if($delete_msg): ?>
    <div class="msg <?php echo (strpos($delete_msg,'deleted')!==false)?'success':'error'; ?>">
      <?=htmlspecialchars($delete_msg)?>
    </div>
  <?php endif; ?>

  <div class="tabs">
    <button class="tab-btn active" data-tab="tab-bca">BCA (<?=count($bca_rows)?>)</button>
    <button class="tab-btn" data-tab="tab-bba">BBA (<?=count($bba_rows)?>)</button>
    <button class="tab-btn" data-tab="tab-mba">MBA (<?=count($mba_rows)?>)</button>
    <button class="tab-btn" data-tab="tab-bcom">B.Com (<?=count($bcom_rows)?>)</button>
  </div>

  <!-- BCA -->
  <div id="tab-bca" class="panel tab-panel">
    <?php if(empty($bca_rows)): ?>
      <div class="no-data">No BCA feedback yet.</div>
    <?php else: ?>
      <table>
        <thead>
          <tr><th>Name</th><th>Email</th><th class="small">Submitted At</th><th>Feedback</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php foreach($bca_rows as $r): ?>
          <tr>
            <td><?=htmlspecialchars($r['name'])?></td>
            <td><?=htmlspecialchars($r['email'])?></td>
            <td class="small"><?=htmlspecialchars($r['submitted_at'])?></td>
            <td><?=nl2br(htmlspecialchars($r['feedback']))?></td>
            <td>
              <form class="action-form" method="post" onsubmit="return confirm('Delete this feedback?');">
                <input type="hidden" name="delete_id" value="<?=intval($r['id'])?>">
                <input type="hidden" name="table" value="feedback_bca">
                <button type="submit" class="del-btn">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

  <!-- BBA -->
  <div id="tab-bba" class="panel tab-panel" style="display:none">
    <?php if(empty($bba_rows)): ?>
      <div class="no-data">No BBA feedback yet.</div>
    <?php else: ?>
      <table>
        <thead>
          <tr><th>Name</th><th>Email</th><th class="small">Submitted At</th><th>Feedback</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php foreach($bba_rows as $r): ?>
          <tr>
            <td><?=htmlspecialchars($r['name'])?></td>
            <td><?=htmlspecialchars($r['email'])?></td>
            <td class="small"><?=htmlspecialchars($r['submitted_at'])?></td>
            <td><?=nl2br(htmlspecialchars($r['feedback']))?></td>
            <td>
              <form class="action-form" method="post" onsubmit="return confirm('Delete this feedback?');">
                <input type="hidden" name="delete_id" value="<?=intval($r['id'])?>">
                <input type="hidden" name="table" value="feedback_bba">
                <button type="submit" class="del-btn">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

  <!-- MBA -->
  <div id="tab-mba" class="panel tab-panel" style="display:none">
    <?php if(empty($mba_rows)): ?>
      <div class="no-data">No MBA feedback yet.</div>
    <?php else: ?>
      <table>
        <thead>
          <tr><th>Name</th><th>Email</th><th class="small">Submitted At</th><th>Feedback</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php foreach($mba_rows as $r): ?>
          <tr>
            <td><?=htmlspecialchars($r['name'])?></td>
            <td><?=htmlspecialchars($r['email'])?></td>
            <td class="small"><?=htmlspecialchars($r['submitted_at'])?></td>
            <td><?=nl2br(htmlspecialchars($r['feedback']))?></td>
            <td>
              <form class="action-form" method="post" onsubmit="return confirm('Delete this feedback?');">
                <input type="hidden" name="delete_id" value="<?=intval($r['id'])?>">
                <input type="hidden" name="table" value="feedback_mba">
                <button type="submit" class="del-btn">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

  <!-- B.Com -->
  <div id="tab-bcom" class="panel tab-panel" style="display:none">
    <?php if(empty($bcom_rows)): ?>
      <div class="no-data">No B.Com feedback yet.</div>
    <?php else: ?>
      <table>
        <thead>
          <tr><th>Name</th><th>Email</th><th class="small">Submitted At</th><th>Feedback</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php foreach($bcom_rows as $r): ?>
          <tr>
            <td><?=htmlspecialchars($r['name'])?></td>
            <td><?=htmlspecialchars($r['email'])?></td>
            <td class="small"><?=htmlspecialchars($r['submitted_at'])?></td>
            <td><?=nl2br(htmlspecialchars($r['feedback']))?></td>
            <td>
              <form class="action-form" method="post" onsubmit="return confirm('Delete this feedback?');">
                <input type="hidden" name="delete_id" value="<?=intval($r['id'])?>">
                <input type="hidden" name="table" value="feedback_bcom">
                <button type="submit" class="del-btn">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

</div>

<script>
  // simple tab switching
  document.querySelectorAll('.tab-btn').forEach(btn=>{
    btn.addEventListener('click',()=>{
      document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('active'));
      btn.classList.add('active');
      const tab = btn.getAttribute('data-tab');
      document.querySelectorAll('.tab-panel').forEach(p=>p.style.display='none');
      document.getElementById(tab).style.display = 'block';
    });
  });
</script>
</body>
</html>
