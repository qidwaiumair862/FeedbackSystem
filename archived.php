<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Archived Notices</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f6d365, #fda085);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 80%;
      max-width: 900px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
      padding: 40px;
      animation: fadeIn 1s ease-in;
    }

    h1 {
      text-align: center;
      color: #d35400;
      font-size: 40px;
      margin-bottom: 30px;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
    }

    .notice {
      border-left: 6px solid #e67e22;
      background: #fff3e0;
      padding: 15px 20px;
      border-radius: 10px;
      margin: 15px 0;
      transition: all 0.3s ease;
    }

    .notice:hover {
      background: #ffe0b2;
      transform: scale(1.03);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .notice h3 {
      color: #e67e22;
      margin-bottom: 5px;
    }

    .notice p {
      color: #333;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .back-btn {
      display: inline-block;
      margin-top: 20px;
      background: #e67e22;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #bf6516;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🗂 Archived Notices</h1>

    <div class="notice">
      <h3>🎓 Convocation Ceremony 2024</h3>
      <p>Convocation for batch 2024 was successfully held in February with Chief Guest Dr. R. Kumar.</p>
    </div>

    <div class="notice">
      <h3>🏆 Sports Week Results</h3>
      <p>Department of BBA won the overall Sports Championship Trophy 2023!</p>
    </div>

    <div class="notice">
      <h3>📘 Alumni Meet 2023</h3>
      <p>The Alumni Meet of 2023 was organized in the Main Auditorium Hall on 25th November.</p>
    </div>

    <a href="index.php" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
