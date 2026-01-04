<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Reports</title>
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #c2ffd8, #e0ffe6);
  color: #222;
  text-align: center;
}

.header {
  background-color: #006633;
  color: white;
  padding: 25px;
  font-size: 28px;
  letter-spacing: 2px;
}

.container {
  max-width: 900px;
  margin: 60px auto;
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.3);
  padding: 40px;
  text-align: left;
}

h2 {
  color: #006633;
  border-bottom: 3px solid #00994d;
  display: inline-block;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 15px;
}

table, th, td {
  border: 1px solid #ccc;
}

th {
  background: #00994d;
  color: white;
  padding: 10px;
}

td {
  padding: 10px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

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

<div class="header">📊 Reports</div>

<div class="container">
  <h2>Recent Feedback Reports</h2>
  <p>Here you can view the recent feedback data summaries collected from users.</p>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Feedback Type</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Mohd Umair</td>
      <td>Positive</td>
      <td>Reviewed</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Akash Sharma</td>
      <td>Neutral</td>
      <td>Pending</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Atul Sahu</td>
      <td>Negative</td>
      <td>Resolved</td>
    </tr>
  </table>
  <a href="index.php" class="back-btn">⬅ Back to Home</a>
</div>

</body>
</html>
