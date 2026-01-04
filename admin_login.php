<?php
session_start();
$conn = new mysqli("localhost", "root", "", "jhony");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header("Location: admin_panel.php");
        exit();
    } else {
        $error = "Invalid admin credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
            body {
    background: url('your-background.jpg') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url(https://cdn.pixabay.com/photo/2015/07/05/10/18/tree-832079_960_720.jpg);
    background-repeat: no-repeat;
    background-size: cover;
     
}

.login-box {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    padding: 40px 30px;
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    width: 350px;
    text-align: center;
    border: 1px solid black;
   
}

.login-box h2 {
    margin-bottom: 30px;
    color: red;
}

.login-box input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    background: rgba(255, 255, 255, 0.3);
    color: red;
    outline: none;
   
}

.login-box input::placeholder {
    color: #ffcccc;
}

.login-box button {
    width: 100%;
    padding: 12px;
    background-color: rgba(0, 123, 255, 0.8);
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
    
}

.login-box button:hover {
    background-color: rgba(0, 123, 255, 1);
}

.error {
    color: #ffcccc;
    margin-top: 10px;
}
    </style>
</head>
<body>

<div class="login-box">

    <h2>Admin Login</h2>

    <form method="POST">

        <input type="text" name="username" placeholder="Username" required><br>

        <input type="password" name="password" placeholder="Password" required><br>

        <button type="submit" name="login">Login</button>

    </form>

    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

</div>

</body>
</html>