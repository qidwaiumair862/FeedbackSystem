<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Faculties</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #a0c1ff, #e0eaff);
      min-height: 100vh;
      background-attachment: fixed;
      text-align: center;
    }

    header {
      background-color: #000;
      color: orange;
      padding: 25px 0;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    .faculty-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 50px 20px;
    }

    .faculty-card {
      background-color: #fff;
      border-radius: 20px;
      width: 250px;
      padding: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .faculty-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }

    .faculty-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid orange;
    }

    .faculty-name {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 5px;
    }

    .faculty-designation {
      font-size: 16px;
      color: #777;
    }

    .back-btn {
      display: inline-block;
      margin-top: 40px;
      background: linear-gradient(90deg, #007BFF, #00aaff);
      color: white;
      padding: 8px 20px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
      transition: 0.3s ease;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }

    .back-btn:hover {
      background: linear-gradient(90deg, #0056b3, #007BFF);
      transform: scale(1.05);
    }

    footer {
      margin-top: 60px;
      background-color: #000;
      color: white;
      padding: 15px 0;
      font-size: 14px;
    }

  </style>
</head>
<body>
  <header>👩‍🏫 Our Faculties</header>

  <div class="faculty-container">
    <div class="faculty-card">
      <!-- <img src="faculty1.jpg" alt="Dr. Sanjeev Pandey"> -->
      <div class="faculty-name">Dr. Sanjeev Pandey</div>
      <div class="faculty-designation">Professor, BCA</div>
    </div>

    <div class="faculty-card">
      <!-- <img src="faculty2.jpg" alt="Prof. Shyam Srivastav"> -->
      <div class="faculty-name">Asst. Prof. Shyam Srivastav</div>
      <div class="faculty-designation">Assistant Professor, BCA</div>
    </div>

    <div class="faculty-card">
      <!-- <img src="faculty3.jpg" alt="Prof. Pawani Rastogi"> -->
      <div class="faculty-name">Asst. Prof. Pawani Rastogi</div>
      <div class="faculty-designation">Assistant Professor, BCA</div>
    </div>

    <div class="faculty-card">
      <!-- <img src="faculty4.jpg" alt="Dr. Ramjeet Singh"> -->
      <div class="faculty-name">Dr. Ramjeet Singh</div>
      <div class="faculty-designation">Associate Professor, BCA</div>
    </div>

    <div class="faculty-card">
      <!-- <img src="faculty5.jpg" alt="Dr. Anurag Tiwari"> -->
      <div class="faculty-name">Dr. Anurag Tiwari</div>
      <div class="faculty-designation">Professor, BCA</div>
    </div>
  </div>

  <a href="index.php" class="back-btn">⬅ Back to Home</a>

  <footer>© 2025 College Feedback Portal | Designed by Umair Qidwai</footer>
</body>
</html>
