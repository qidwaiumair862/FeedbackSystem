<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Help & Writing Ideas</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(120deg, #1a2a6c, #b21f1f, #fdbb2d);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .help-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      padding: 40px;
      width: 80%;
      max-width: 800px;
      color: white;
      box-shadow: 0 0 30px rgba(0,0,0,0.4);
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .help-container h1 {
      margin-bottom: 10px;
      font-size: 32px;
      letter-spacing: 1px;
      color: #fff;
      text-shadow: 0 0 15px rgba(255,255,255,0.6);
    }

    .help-container p {
      font-size: 16px;
      line-height: 1.6;
      color: #eaeaea;
      margin-bottom: 30px;
    }

    .idea-list {
      text-align: left;
      margin: 20px auto;
      width: 80%;
    }

    .idea-list h3 {
      color: #00ffff;
      margin-bottom: 10px;
      text-shadow: 0 0 10px rgba(0,255,255,0.8);
    }

    .idea-list ul {
      list-style: none;
      padding: 0;
    }

    .idea-list li {
      margin-bottom: 10px;
      background: rgba(255, 255, 255, 0.1);
      padding: 10px 15px;
      border-radius: 12px;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .idea-list li:hover {
      background: rgba(255,255,255,0.25);
      transform: scale(1.03);
      color: #fff;
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
  <div class="help-container">
    <h1>Need Help Writing Your Feedback?</h1>
    <p>Here are some ideas to help you write meaningful and constructive feedback about your university experience.</p>

    <div class="idea-list">
      <h3>💡 Topics You Can Write About:</h3>
      <ul>
        <li>🎓 Your overall experience at the university.</li>
        <li>🏫 The classroom environment and teaching quality.</li>
        <li>👩‍🏫 Behavior and helpfulness of professors or mentors.</li>
        <li>📚 Availability of study materials and library resources.</li>
        <li>💻 Laboratory and practical facilities.</li>
        <!-- <li>🏢 Campus cleanliness and maintenance.</li>
        <li>🍴 Quality of food in the canteen or hostel.</li> -->
        <li>🎉 Cultural events, workshops, and extracurricular activities.</li>
        <li>💬 Any suggestions to improve the university environment.</li>
      </ul>
    </div>

    <a href="index.php" class="back-btn">⬅ Back to Home</a>
  </div>
</body>
</html>
