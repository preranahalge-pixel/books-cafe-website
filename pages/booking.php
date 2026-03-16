<?php
session_start();
$conn = new mysqli("localhost", "root", "", "cafe_booking");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* INSERT BOOKING */
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $persons = $_POST['persons'];
    $email = $_SESSION['user'];

        $stmt = $conn->prepare("INSERT INTO table_booking (name, booking_date, booking_time, persons, email) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $name, $date, $time, $persons, $email);
        $stmt->execute();


    echo "<script>alert('Table Booked Successfully!');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Table</title>
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
    <section class="booking-hero">
        <div class="hero-content">
            <h1>Sip. Read. Relax.</h1>
            <p>Reserve your table for a perfect coffee and book experience.</p>
        </div>
    </section>

<section class="section booking-container">

<div class="box">
    <h2>Book a Table</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="date" name="date" required>
        <input type="time" name="time" required>
        <input type="number" name="persons" placeholder="Number of Persons" required>
        <button type="submit" name="submit">Book Now</button>
    </form>
</div>
</section>


 <!-- Footer -->
    <footer>
        <p>© 2026 Book Café | Sip. Read. Relax. </p>
    </footer>

    <script>

        function toggleMenu(){
        let menu = document.getElementById("navLinks");
        menu.classList.toggle("active");
        }
    </script>
</body>
</html>