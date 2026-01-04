<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #000000, #0f2027, #203a43, #2c5364);
      background-size: 400% 400%;
      animation: bgMove 15s ease infinite;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      overflow-x: hidden;
    }

    @keyframes bgMove {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    .contact-container {
      text-align: center;
      padding-top: 80px;
    }

    .contact-container h1 {
      font-size: 50px;
      color: #00ffcc;
      text-shadow: 0 0 20px #00ffcc, 0 0 40px #00ffcc;
      margin-bottom: 40px;
      animation: glow 2s infinite alternate;
    }

    @keyframes glow {
      from { text-shadow: 0 0 10px #00ffcc; }
      to { text-shadow: 0 0 30px #00ffcc, 0 0 50px #00ffcc; }
    }

    .contact-card {
      background: rgba(255, 255, 255, 0.08);
      border: 2px solid rgba(0, 255, 204, 0.5);
      border-radius: 15px;
      padding: 40px;
      width: 500px;
      margin: 0 auto;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 25px rgba(0, 255, 204, 0.2);
      transition: all 0.3s ease-in-out;
    }

    .contact-card:hover {
      box-shadow: 0 0 50px rgba(0, 255, 204, 0.6);
      transform: scale(1.05);
    }

    .contact-card h2 {
      color: #00e6e6;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .contact-card p {
      color: #ccc;
      margin-bottom: 25px;
      font-size: 15px;
    }

    .contact-info {
      text-align: left;
      margin-left: 20px;
    }

    .info-item {
      display: flex;
      align-items: center;
      margin: 15px 0;
      font-size: 17px;
      color: #fff;
      transition: transform 0.3s;
    }

    .info-item i {
      font-style: normal;
      margin-right: 15px;
      font-size: 22px;
      color: #00ffcc;
      text-shadow: 0 0 10px #00ffcc;
    }

    .info-item:hover {
      transform: translateX(10px);
      color: #00ffcc;
    }

    .back-btn {
      display: inline-block;
      margin-top: 30px;
      background: #00ffcc;
      color: #000;
      padding: 12px 25px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s;
      box-shadow: 0 0 15px #00ffcc;
    }

    .back-btn:hover {
      background: #fff;
      box-shadow: 0 0 25px #00ffcc, 0 0 40px #00ffcc;
      transform: scale(1.1);
    }
  </style>
</head>

<body>

  <div class="contact-container">
    <h1>📞 Contact Us</h1>

    <div class="contact-card">
      <h2>Get in Touch</h2>
      <p>We’re always here to help! Reach us anytime through the details below.</p>

      <div class="contact-info">
        <div class="info-item">
          <i>📱</i>
          <span><strong>Phone 1:</strong> +91 99598 08690</span>
        </div>
        <div class="info-item">
          <i>📱</i>
          <span><strong>Phone 2:</strong> +91 90445 31520</span>
        </div>
        <div class="info-item">
          <i>📧</i>
          <span><strong>Email:</strong> qidwai9999@gmail.com</span>
        </div>
      </div>

      <a href="index.php" class="back-btn">⬅ Back to Home</a>
    </div>
  </div>

</body>
</html>
