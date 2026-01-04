<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Latest Notices</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #c2e9fb, #a1c4fd);
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
      color: #003366;
      font-size: 40px;
      margin-bottom: 30px;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
    }

    .notice {
      border-left: 6px solid #007BFF;
      background: #f0f8ff;
      padding: 15px 20px;
      border-radius: 10px;
      margin: 15px 0;
      transition: all 0.3s ease;
    }

    .notice:hover {
      background: #e3f2fd;
      transform: scale(1.03);
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .notice h3 {
      color: #007BFF;
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
      background: #007BFF;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📢 Latest Notices</h1>

    <div class="notice">
      <h3>🕒 College Annual Fest - 2025</h3>
      <p>Our annual fest will be held on 15th December. All students are invited to participate!</p>
    </div>

    <div class="notice">
      <h3>🧾 Exam Schedule Released</h3>
      <p>The mid-semester exam schedule for all departments has been published on the notice board.</p>
    </div>

    <div class="notice">
      <h3>💡 Internship Drive</h3>
      <p>Infosys and TCS are visiting our campus next week for placement interviews.</p>
    </div>

    <a href="index.php" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
