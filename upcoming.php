<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upcoming Events</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #a8e6ff, #e8f7ff);
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #003366;
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
    }

    .event-info {
      padding: 20px;
    }

    .event-info h2 {
      color: #003366;
      font-size: 22px;
      margin-bottom: 10px;
    }

    .event-info p {
      color: #555;
      line-height: 1.6;
      font-size: 15px;
    }

    .date {
      display: inline-block;
      margin-top: 10px;
      padding: 6px 12px;
      background-color: #ff6600;
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
  <header>🌟 Upcoming College Events</header>


  <!-- <div class="event-container">
    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?college,seminar" alt="Event 1">
      <div class="event-info">
        <h2>Diwali Fest 2025</h2>
        <p>Join us for the Diwali festival , we make world record in Diwali !</p>
        <span class="date">oct 21, 2025</span>
      </div>
    </div> -->

  <div class="event-container">
    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?college,seminar" alt="Event 1">
      <div class="event-info">
        <h2>Technical Fest 2025</h2>
        <p>Join us for the annual TechFest featuring coding competitions, robotics showcase, and startup pitches!</p>
        <span class="date">Nov 12, 2025</span>
      </div>
    </div>

    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?students,conference" alt="Event 2">
      <div class="event-info">
        <h2>Innovation Workshop</h2>
        <p>Interactive workshop on design thinking and entrepreneurship, hosted by top mentors.</p>
        <span class="date">Dec 3, 2025</span>
      </div>
    </div>

    <div class="event-card">
      <img src="https://source.unsplash.com/600x400/?college,celebration" alt="Event 3">
      <div class="event-info">
        <h2>Annual Cultural Fest</h2>
        <p>Experience music, dance, and drama with performances from talented students across departments.</p>
        <span class="date">Jan 15, 2026</span>
      </div>
    </div>
        <a href="index.php" class="back-btn">⬅ Back to Home</a>

  </div>
</body>
</html>
