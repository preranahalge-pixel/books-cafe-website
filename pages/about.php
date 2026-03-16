<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About | Book Café</title>
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
    <section class="about-hero">
        <div class="hero-content">
            <h1>Sip. Read. Relax.</h1>
            <p>A place where stories and coffee come together.</p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="section">
        <h2 class="section-title"> Our Story</h2>
        <p class="about-text">
            Book Café was created for readers who love the aroma of coffee as much as the smell of books. 
            We believe that a cozy corner, a warm drink, and a good book can make any day special. 
            Our café is designed to be a peaceful escape from busy life.
        </p>
    </section>

    <!-- Mission & Vision -->
    <section class="section category-bg">
        <h2 class="section-title"> Our Mission</h2>
        <p class="about-text">
            To create a welcoming space where book lovers can connect, relax, and explore new stories.
            To support local authors and foster a love for reading in our community.
        </p>

        <h2 class="section-title">Our Vision</h2>
        <p class="about-text">
            To become the most loved community café that blends literature, creativity, and coffee culture.
            To inspire a love for reading and foster connections among book enthusiasts.
        </p>
    </section>

    <!-- Featured Books -->
    <section class="section">
        <h2 class="section-title"> Featured Books</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794">
                <h3>The Silent Reader</h3>
                <p>Fiction</p>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f">
                <h3>Mindful Living</h3>
                <p>Self-Help</p>
            </div>
        </div>
    </section>

    <!-- Featured Drinks -->
    <section class="section category-bg">
        <h2 class="section-title"> Featured Drinks</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
                <h3>Cappuccino</h3>
                <p>₹120</p>
            </div>

            <div class="card">
                <img src="https://www.forkinthekitchen.com/wp-content/uploads/2022/06/220518.vanilla.latte-6410.jpg">
                <h3>Vanilla Latte</h3>
                <p>₹150</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Book Café | All About Us</p>
    </footer>

     <script>

        function toggleMenu(){
        let menu = document.getElementById("navLinks");
        menu.classList.toggle("active");
        }
    </script>
</body>
</html>