<?php
session_start();

$conn = new mysqli("localhost", "root", "", "cafe_booking");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')";

    if($conn->query($sql)==TRUE){
        echo "<script>alert('Feedback Sent Successfully');</script>";
    } else{
        echo "Error: ".$conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact | Book Café</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cafe-website/assest/style.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <h2 class="logo">Book Café</h2>
            
            <!-- Hamburger Icon -->
                <div class="hamburger" onclick="toggleMenu()">
                    ☰
                </div>

                <ul class="nav-links" id="navLinks">
                <?php if(isset($_SESSION['user'])) { ?>
                    <li><span class="welcome-text">Welcome, <?php echo $_SESSION['user']; ?></span></li>
                    <li><a href="/cafe-website/user/user_logout.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="/cafe-website/user/user_auth.php">Login</a></li>
                <?php } ?>
                
                <li><a href="/cafe-website/pages/home.php">Home</a></li>
                <li><a href="/cafe-website/pages/menu.php">Menu</a></li>
                <li><a href="/cafe-website/pages/books.php">Books</a></li>
                <li><a href="/cafe-website/pages/booking.php">Booking</a></li>
                <li><a href="/cafe-website/pages/about.php">About</a></li>
                <li><a href="/cafe-website/pages/contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Sip. Read. Relax.</h1>
            <p>We’d love to hear from you.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-container">
        
        <div class="contact-form">
            <h2>Give Your Feedback</h2>
            <form method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Write your feedback..." rows="5" required></textarea>
                <button type="submit" name="submit">Submit Feedback</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>📍 Visit Us</h2>
            <p><strong>Address:</strong> Kranti Chowk, Chh. Sambhajinagar, India</p>
            <p><strong>Phone:</strong> +91 98765 43210</p>
            <p><strong>Email:</strong> hello@bookcafe.com</p>
            <p><strong>Opening Hours:</strong> 9:00 AM – 10:00 PM</p>

            <iframe 
                src="https://maps.google.com/maps?q=Chhatrapati%20Sambhajinagar&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%" 
                height="200" 
                style="border:0; margin-top:15px;"
                allowfullscreen="">
            </iframe>
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Book Café | Sip. Read. Relax. ☕</p>
    </footer>

    <script>

        function toggleMenu(){
        let menu = document.getElementById("navLinks");
        menu.classList.toggle("active");
        }
    </script>
</body>
</html>