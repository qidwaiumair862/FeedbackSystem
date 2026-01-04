<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Performance</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #ffe5b4, #fff5e1);
  color: #222;
  text-align: center;
}

.header {
  background-color: #ff6600;
  color: white;
  padding: 25px;
  font-size: 28px;
  letter-spacing: 2px;
}

.container {
  max-width: 950px;
  margin: 60px auto;
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.3);
  padding: 40px;
  text-align: left;
}

h2 {
  color: #ff6600;
  border-bottom: 3px solid #ff6600;
  display: inline-block;
  margin-bottom: 20px;
}

.progress-bar {
  width: 100%;
  background: #ddd;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 20px;
}

.progress {
  height: 25px;
  text-align: right;
  padding-right: 10px;
  color: white;
  line-height: 25px;
}

.p1 { width: 85%; background-color: #28a745; }
.p2 { width: 70%; background-color: #17a2b8; }
.p3 { width: 55%; background-color: #ffc107; }
.back-btn {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 25px;
      background: #00c3ff;
      border-radius: 8px;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #0079b6;
      transform: scale(1.05);
    }
</style>
</head>
<body>

<div class="header">📈 Performance</div>

<div class="container">
  <h2>System Performance</h2>
  <p>Below is a quick performance summary of the feedback system modules.</p>

  <h3>Feedback Submission</h3>
  <div class="progress-bar"><div class="progress p1">85%</div></div>

  <h3>Database Response</h3>
  <div class="progress-bar"><div class="progress p2">70%</div></div>

  <h3>Admin Review Efficiency</h3>
  <div class="progress-bar"><div class="progress p3">55%</div></div>
  <a href="index.php" class="back-btn">⬅ Back to Home</a>
</div>

</body>
</html>
