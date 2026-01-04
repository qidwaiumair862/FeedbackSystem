<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // DB connection
    $conn = new mysqli("localhost", "root", "", "feedback_system"); // change as needed

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        header("Location: feedback.php?status=success");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body {
            margin: 0; 
            padding: 0;
            background-image: url(https://images.unsplash.com/photo-1506765515384-028b60a970df?auto=format&fit=crop&w=1740&q=80); /*no-repeat center center fixed; */
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

  

        h2 {
            text-align: center;
            color: red;
        }

        input[type="text"], input[type="email"], textarea {
            width: 90%;
            padding: 10px;
            /* margin-top: 10px ; */
            margin: 10px 0 20px 0;
            /* margin-bottom: 15px; */
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            font-size: 14px;
        }

        input[type="submit"], .view-btn {
            width: 100%;
            padding: 10px;
            border: none;
            margin-top: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        /* .view-btn {
            background-color: #00BFFF;
            color: white;
            text-align: center;
            text-decoration: none;
            display: block;
        } */

        .popup {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #d4edda;
            color: #155724;
            padding: 25px 45px;
            border-radius: 10px;
            box-shadow: 0 0 15px green;
            /* text-align: center; */
            font-size: 18px;
            font-weight: bold;
            /* display: none; */
            z-index: 1000;
        }

        .popup .close-btn {
            color: red;
            font-weight: bold;
            margin-left: 20px;
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
<div class="popup" id="popup">
    Submitted successfully!
    <span class="close-btn" onclick="document.getElementById('popup').style.display='none'">X</span>
</div>
<script>
    document.getElementById('popup').style.display = 'block';
</script>
<?php endif; ?>

<div class="container">
    
    <h2>Submit Your Feedback</h2>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>

        <!-- <label>Email:</label>
        <input type="email" name="email" required> -->

        <label>Message:</label>
        <textarea name="message" required></textarea>

        <input type="submit" value="Submit Feedback">
    </form>
    <!-- <a href="view_feedback.php" class="view-btn">View Feedback</a> -->
</div>


</body>
</html>