<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Developers</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(to right, #e3f2fd, #bbdefb);
      /* background: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1740&q=80') no-repeat center center/cover; */
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .dev-container {
      max-width: 800px;
      margin: 80px auto;
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      text-align: center;
    }

    h1 {
      color: #ff6600;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .dev-card {
      display: flex;
      align-items: center;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 30px;
    }

    .dev {
      width: 250px;
      background-color: #f5f5f5;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .dev:hover {
      transform: scale(1.05);
    }

    .dev img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .dev h3 {
      color: #333;
      margin: 10px 0 5px 0;
    }

    .dev p {
      color: #777;
      font-size: 14px;
    }

    /* .back-btn {
      display: inline-block;
      margin-top: 30px;
      text-decoration: none;
      background-color: #ff6600;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background 0.3s;
    }

    .back-btn:hover {
      background-color: #e65c00;
    } */

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

  <div class="dev-container">
    <h1>DEVELOPER</h1>
    <p>Meet the creative team behind this feedback system project.</p>

    <div class="dev-card">
      <div class="dev">
        <img src="umair.jpg" alt="Mohd Umair">

        <h3>Mohd Umair</h3>
        <p>Full Stack Developer</p>
      </div>

      <!-- <div class="dev">
        <img src="https://cdn-icons-png.flaticon.com/512/236/236832.png" alt="Developer 2">
        <h3>John Doe</h3>
        <p>UI/UX Designer</p>
      </div> -->

      <!-- <div class="dev">
        <img src="umair1.jpg" alt="Mohd Umair">

        <h3>Mohd Umair</h3>
        <p>Backend Engineer</p>
      </div>
    </div> -->

    <a href="index.php" class="back-btn">⬅ Back to Home</a>
  </div>

</body>
</html>
