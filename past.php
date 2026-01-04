<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Past Events</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f7d9d9, #fdf1f1);
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #660000;
      color: white;
      text-align: center;
      padding: 20px 0;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .event-container {
      width: 90%;
      margin: 40px auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
    }

    .event-card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      overflow: hidden;
      transition: transform 0.3s;
    }

    .event-card:hover {
      transform: translateY(-10px);
    }

    .event-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      filter: grayscale(80%);
    }

    .event-info {
      padding: 20px;
    }

    .event-info h2 {
      color: #660000;
      font-size: 22px;
      margin-bottom: 10px;
    }

    .event-info p {
      color: #444;
      line-height: 1.6;
      font-size: 15px;
    }

    .date {
      display: inline-block;
      margin-top: 10px;
      padding: 6px 12px;
      background-color: #990000;
      color: white;
      border-radius: 20px;
      font-weight: bold;
      font-size: 14px;
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
  <header>🎓 Past College Events</header>

  <div class="event-container">
    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?graduation,event" alt="Past Event 1">
      <div class="event-info">
        <h2>Farewell Ceremony 2024</h2>
        <p>A heartwarming farewell to our final-year students filled with memories, laughter, and nostalgia.</p>
        <span class="date">May 2024</span>
      </div>
    </div>

    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?hackathon,students" alt="Past Event 2">
      <div class="event-info">
        <h2>Hackathon 2024</h2>
        <p>Students collaborated in 24-hour coding challenges to develop innovative solutions to real-world problems.</p>
        <span class="date">Feb 2024</span>
      </div>
    </div>

    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?cultural,event" alt="Past Event 3">
      <div class="event-info">
        <h2>Cultural Night 2023</h2>
        <p>Colorful evening showcasing diverse talents with dance, drama, and music performances by students.</p>
        <span class="date">Dec 2023</span>
      </div>
    </div>
        <a href="index.php" class="back-btn">⬅ Back to Home</a>

  </div>
</body>
</html>
