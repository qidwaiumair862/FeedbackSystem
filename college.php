<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Information</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url('https://images.unsplash.com/photo-1606760227091-1a3b27d3b9c7?auto=format&fit=crop&w=1740&q=80') no-repeat center center fixed;
            background-size: cover;
            color: white;
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
        }

        header {
            text-align: center;
            padding: 40px 0 10px;
            position: relative;
            z-index: 2;
        }

        header h1 {
            font-size: 3rem;
            color: #ffcb05;
            text-shadow: 0 0 20px rgba(255, 203, 5, 0.9);
        }

        .college-info {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
            position: relative;
            z-index: 2;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 40px;
            width: 70%;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease;
            transition: transform 0.3s;
        }

        .info-box:hover {
            transform: scale(1.03);
        }

        .info-box h2 {
            color: #00ffff;
            font-size: 2rem;
            margin-bottom: 15px;
            text-align: center;
        }

        .info-box p {
            font-size: 1.1rem;
            line-height: 1.6;
            text-align: justify;
            color: #f5f5f5;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: #aaa;
            text-align: center;
            padding: 10px 0;
            font-size: 0.9rem;
            z-index: 2;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
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
    <div class="overlay"></div>
    <header>
        <h1>College</h1>
    </header>

    <section class="college-info">
        <div class="info-box">
            <h2>🌟 Dr Ram Manohar Lohia Awadh University</h2>
            <p>
                Dr Ram Manohar Lohiya Awadh University is a premier institution known for academic excellence, innovation, 
                and holistic development. Established with the vision to nurture bright minds, the 
                university offers state-of-the-art facilities, experienced faculty, and a vibrant campus life.
            </p>
            <p>
                It provides top-notch programs in Engineering, Management, Medical, and Humanities streams, 
                empowering students to become leaders of tomorrow.
            </p>
            <a href="index.php" class="back-btn">⬅ Back to Home</a>
        </div>
    </section>

    <footer>
        <p>© 2025 Al-Falah University | Developed by Mohd Umair</p>
    </footer>
</body>
</html>
