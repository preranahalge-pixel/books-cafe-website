<?php
session_start();
$conn = new mysqli("localhost", "root", "", "cafe_booking");

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
        header("Location: /cafe-website/admin/admin_dashboard.php");
    } else {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial;
            background: #f5efe6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3e2723;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>
    <form method="POST" autocomplete="off">
        <input type="text" name="username" placeholder="User_Username" autocomplete="off" required>
        <input type="password" name="password" placeholder="User_Password" autocomplete="off" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>

<!-- Username: admin
Password: admin123 -->