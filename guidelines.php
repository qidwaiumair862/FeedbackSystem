<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guidelines</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #2a0845, #6441A5);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      overflow-x: hidden;
    }

    .guideline-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(15px);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(0,0,0,0.5);
      max-width: 800px;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    .guideline-container h1 {
      font-size: 40px;
      margin-bottom: 20px;
      color: #ffcc00;
      text-shadow: 2px 2px 10px rgba(255,255,255,0.2);
      border-bottom: 3px solid #ffcc00;
      display: inline-block;
      padding-bottom: 10px;
    }

    .guideline-container p {
      font-size: 18px;
      line-height: 1.8;
      color: #f0f0f0;
      margin-top: 15px;
    }

    .guideline-list {
      margin-top: 25px;
      text-align: left;
    }

    .guideline-list li {
      background: rgba(255, 255, 255, 0.15);
      padding: 15px 20px;
      border-radius: 10px;
      margin-bottom: 15px;
      font-size: 17px;
      position: relative;
      transition: 0.3s;
      list-style: none;
    }

    .guideline-list li::before {
      content: "✔";
      position: absolute;
      left: -30px;
      color: #00ffcc;
      font-weight: bold;
      font-size: 20px;
    }

    .guideline-list li:hover {
      transform: translateX(10px);
      background: rgba(255,255,255,0.25);
    }

    .back-btn {
      margin-top: 30px;
      display: inline-block;
      background: #ffcc00;
      color: #000;
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #fff;
      color: #000;
      transform: scale(1.1);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="guideline-container">
    <h1>📘 Guidelines</h1>
    <p>Follow these college and system guidelines to ensure smooth experience for all students and staff.</p>

    <ul class="guideline-list">
      <li>Respect all faculty members and maintain discipline within campus premises.</li>
      <li>Submit your feedback honestly to help improve our learning environment.</li>
      <li>Do not share your login credentials with anyone.</li>
      <li>Use official college communication channels for queries and support.</li>
      <li>Participate actively in college events and maintain a positive attitude.</li>
    </ul>

    <a href="index.php" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
