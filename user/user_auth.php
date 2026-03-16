<?php
session_start();
$conn = new mysqli("localhost", "root", "", "cafe_booking");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* ================= REGISTER ================= */
if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful! Please Login.');</script>";
    } else {
        echo "<script>alert('Email already exists!');</script>";
    }
}

/* ================= LOGIN ================= */
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['name'];
            header("Location: /cafe-website/pages/home.php");
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<style>
body {
    font-family: Arial;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background: url("/cafe-website/img/open-book-beautiful-setting - Copy.jpg") no-repeat center center/cover;
    align-items: center;
    text-align: center;
}
/* https://suddencoffee.com/wp-content/uploads/2024/02/Coffee-and-Books.jpg */
.container {
    width: 400px;
    /* background: linear-gradient(135deg,#d7ccc8,#f5efe6); */
    background-image: url("https://www.pngmart.com/files/23/Blurry-PNG-HD.png");
    padding:30px;
    border-radius:15px;
    box-shadow:0px 5px 20px rgba(0,0,0,0.3);
}

h2 {
    text-align:center;
    color: #fff;
}

input {
    width:350px;
    padding:10px;
    margin:8px 0;
    marging-right: 10px;
    border-radius:5px;
    border:1px solid #ccc;
}

button {
    width:325px;
    padding:10px;
    background: #3e2723;
    color:white;
    border:none;
    cursor:pointer;
    border-radius:5px;
}

button:hover {
    background: #5d4037;
    
}

.toggle {
    text-align:center;
    margin-top:10px;
    cursor:pointer;
    color:brown;
    font-size:14px;
}

/* @media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        align-items: center;
    }
} */

</style>

<script>
function toggleForm() {
    var reg = document.getElementById("registerForm");
    var log = document.getElementById("loginForm");

    if (reg.style.display === "none") {
        reg.style.display = "block";
        log.style.display = "none";
    } else {
        reg.style.display = "none";
        log.style.display = "block";
    }
}
</script>

</head>
<body>

<div class="container">

<!-- LOGIN FORM -->
<div id="loginForm">
<h2>User Login</h2>
<form method="POST" >
    <input type="email" name="email" placeholder="Enter Your Email" required>
    <input type="password" name="password" placeholder="Enter Your Password" required>
    <button type="submit" name="login">Login</button>
</form>
<div class="toggle" onclick="toggleForm()">Don't have account? Register</div>
</div>

<!-- REGISTER FORM -->
<div id="registerForm" style="display:none;">
<h2>User Register</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <input type="email" name="email" placeholder="Enter Your Email" required>
    <input type="password" name="password" placeholder="Enter Your Password" required>
    <button type="submit" name="register">Register</button>
</form>
<div class="toggle" onclick="toggleForm()">Already have account? Login</div>
</div>

</div>

</body>
</html>