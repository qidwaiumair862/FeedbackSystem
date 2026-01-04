<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback System</title>
  <style>
    /* Reset & Basic Setup */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f4f6fc;
      color: #333;
    }

    /* Header */
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #000;
      color: orange;
      padding: 15px 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      position: relative;
    }

    .header-left {
      display: flex;
      align-items: center;
    }

    .header img {
      border-radius: 50%;
      margin-right: 20px;
    }

    .header-text h1 {
      line-height: 1.3;
      font-size: 28px;
    }

    .header-text .line1 { color: orange; display: block; }
    .header-text .line2 { color: white; display: block; }

    /* Admin Button */
    .admin-btn {
      background: orange;
      color: black;
      padding: 10px 18px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .admin-btn:hover {
      background: white;
      color: orange;
      box-shadow: 0 0 10px orange;
    }

    /* Navigation */
    nav {
      background: #111;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    nav ul li {
      position: relative;
    }

    nav a {
      display: block;
      padding: 14px 22px;
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      background: orange;
      color: black;
    }

    /* Dropdown Menu */
    nav ul ul {
      display: none;
      position: absolute;
      background: #000;
      top: 100%;
      left: 0;
      min-width: 200px;
      border-radius: 0 0 10px 10px;
    }

    nav ul li:hover > ul {
      display: block;
    }

    nav ul ul li {
      width: 100%;
    }

    nav ul ul ul {
      left: 100%;
      top: 0;
    }

    /* Main Content */
    .main-content {
      text-align: center;
      padding: 60px 20px 30px;
      color: #333;
    }

    .main-content h2 {
      font-size: 36px;
      color: #000;
      margin-bottom: 15px;
      animation: fadeInDown 1.5s ease;
    }

    .main-content p {
      font-size: 18px;
      color: #555;
      animation: fadeInUp 1.5s ease;
    }

    /* Stylish Feedback Banner Section */
    .feedback-banner {
      background: linear-gradient(to right, rgba(0,0,0,0.85), rgba(0,0,0,0.85)),
                  url('college.jpg');
      background-size: cover;
      background-position: center;
      text-align: center;
      padding: 120px 20px;
      position: relative;
      overflow: hidden;
      margin-top: 40px;
    }

    .feedback-banner::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,165,0,0.1) 10%, transparent 10.01%);
      background-size: 80px 80px;
      animation: movePattern 10s linear infinite;
    }

    @keyframes movePattern {
      from { transform: translate(0, 0); }
      to { transform: translate(80px, 80px); }
    }

    .banner-content {
      position: relative;
      z-index: 2;
    }

    .banner-content h1 {
      font-size: 48px;
      font-weight: 700;
      text-transform: uppercase;
      color: white;
      text-shadow: 2px 2px 10px black;
      margin-bottom: 15px;
      animation: fadeInDown 1.5s ease;
    }

    .banner-content h1 span {
      color: orange;
      text-shadow: 2px 2px 8px #000;
    }

    .banner-content p {
      font-size: 20px;
      color: #f2f2f2;
      animation: fadeInUp 2s ease;
    }

    @keyframes fadeInDown {
      0% { opacity: 0; transform: translateY(-40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    /* Footer */
    footer {
      text-align: center;
      background-color: #000;
      color: white;
      padding: 15px 0;
      margin-top: 50px;
      font-size: 14px;
      letter-spacing: 1px;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <div class="header">
    <div class="header-left">
      <div class="logo">
        <img src="logo.jpg" alt="Feedback Logo" width="80" height="80">
      </div>
      <div class="header-text">
        <h1>
          <span class="line1">Feedback For</span>
          <span class="line2">Different Platform</span>
        </h1>
      </div>
    </div>
    <!-- Admin Login Button -->
    <a href="admin_login.php" class="admin-btn">Admin Login</a>
  </div>

  <!-- Navigation -->
  <nav>
    <ul>
      <li><a href="#">🏠 HOME</a>
        <ul>
          <li><a href="#">📊 Dashboard</a>
            <ul>
              <li><a href="overview.php">Overview</a></li>
              <li><a href="performence.php">Performance</a></li>
              <li><a href="reports.php">Reports</a></li>
            </ul>
          </li>
          <li><a href="#">📢 Notices</a>
            <ul>
              <li><a href="latest.php">Latest</a></li>
              <li><a href="archived.php">Archived</a></li>
            </ul>
          </li>
          <li><a href="#">🎉 Events</a>
            <ul>
              <li><a href="upcoming.php">Upcoming</a></li>
              <li><a href="past.php">Past Events</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li><a href="#">🏛 SERVICE</a>
        <ul>
          <li><a href="#">🏬 Department</a>
             <ul>
              <li><a href="bba.php">BBA</a></li>
              <li><a href="bca.php">BCA</a></li>
              <li><a href="mba.php">MBA</a></li>
              <li><a href="bcom.php">B.Com</a></li>
            </ul>
          </li>
          <li><a href="faculties.php">👩‍🏫 Faculties</a></li>
        </ul> 
        <!-- <li><a href="#">🏬 Department</a> -->
  <!-- <ul>
    <li><a href="bba_feedback.php">BBA</a></li>
    <li><a href="bca_feedback.php">BCA</a></li>
    <li><a href="mba_feedback.php">MBA</a></li>
    <li><a href="bcom_feedback.php">B.Com</a></li>
  </ul>
</li> -->

       </li> 

      <li><a href="#">🗂 CONTEXT</a>
        <ul>
          <li><a href="help.php">🆘 Help</a></li>
          <li><a href="feedback_login.php">📝 Feedback</a></li>
          <li><a href="guidelines.php">🧭 Guidelines</a></li>
        </ul>
      </li>

      <li><a href="#">📘 ABOUT</a>
        <ul>
          <li><a href="college.php">🏫 College Info</a></li>
          <li><a href="developers.php">👨‍💻 Developers</a></li>
          <li><a href="contact.php">📞 Contact Us</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- Main Page Content -->
  <div class="main-content">
    <h2>Welcome to the Feedback Portal</h2>
    <p>Choose any option from the menu to get started.</p>
  </div>

  <!-- Stylish Banner Section -->
  <section class="feedback-banner">
    <div class="banner-content">
      <h1>Welcome to <span>Feedback System</span></h1>
      <p>Empowering communication between students and administration.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    © 2025 College Feedback Portal | Designed by Umair Qidwai
  </footer>

</body>
</html>
