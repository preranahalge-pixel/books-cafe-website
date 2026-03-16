<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Café</title>
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
    <section class="hero">
        <div class="hero-content">
            <h1>Sip. Read. Relax.</h1>
            <p>Where every cup tells a story and every book feels like home.</p>
            <a href="/cafe-website/pages/menu.php" class="btn">Explore Now</a>
        </div>
    </section>

    <!-- Featured Books -->
    <section class="section">
        <h2 class="section-title">Featured Books</h2>
        <div class="card-container">
            
            <div class="card">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794">
                <h3>The Silent Reader</h3>
                <p>Fiction</p>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d">
                <h3>Love & Letters</h3>
                <p>Romance</p>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f">
                <h3>Mindful Living</h3>
                <p>Self-Help</p>
            </div>

            <div class="card">
                <img src="https://miro.medium.com/max/2000/1*mYfpcIoBf22nerFSMyr-CQ.jpeg">
                <h3>Grow Your Mind</h3>
                <p>Motivation</p>
            </div>

            <div class="card">
                <img src="https://img.freepik.com/premium-photo/enchanting-castle-mystical-fantasy-realm-with-majestic-waterfall-generative-ai_561855-16936.jpg">
                <h3>Fantasy Realm</h3>
                <p>Fantasy</p>
            </div>

            <div class="card">
                <img src="https://i.pinimg.com/originals/87/a3/45/87a34565a06a1e0f495d90c8c31f8e5e.jpg">
                <h3>Horror Stories</h3>
                <p>Horror</p>
            </div>

            <div class="card">
                <img src="https://tse1.mm.bing.net/th/id/OIP.eqamvcblgi8WELgoVVwIlQHaHa?pid=Api&P=0&h=180">
                <h3>Thriller Tales</h3>
                <p>Thriller</p>
            </div>

            <div class="card">
                <img src="https://tse4.mm.bing.net/th/id/OIP._-iFZPJEApdtsg_sXUl_bQHaEO?pid=Api&P=0&h=180">
                <h3>Path of Enlightenment</h3>
                <p>Spirituality</p>
            </div>

            <div class="card">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgTySYVy5vl-MXJcVAoBG2gjR3sDGz4iPsFfyN7AqiCYrG7VL4ESpwsHKblFj8lWUgbMVYv-YtM0DJVlXAu7C-opWDA9J1f4Bt5iWwG4QgjXphDD9D5BHB8-CCV6Kmg-parDknOVie2RkpjKgcVazHsS2FH2bCKHHWzbt4pRzxbSjs_kHi0E6Z9qYZNlDI/s2048/354086052_1020419689326602_3389815161231759441_n.jpg">
                <h3>Dark Secrets</h3>
                <p>Dark Fiction</p>
            </div>

            <div class="card">
                <img src="https://thumbs.dreamstime.com/b/futuristic-library-digital-bookshelves-technology-stunning-filled-glowing-books-advanced-perfect-sci-fi-projects-355759718.jpg">
                <h3>Science of Mind</h3>
                <p>Science - Fication</p>
            </div>

            <div class="card">
                <img src="https://i.pinimg.com/originals/02/c0/f8/02c0f8f9d00ffd4c8c85d028939e7861.jpg">
                <h3>The Mystery of the Lost Key</h3>
                <p>Mystery</p>
            </div>

            <div class="card">
                <img src="https://thumbs.dreamstime.com/b/biography-1103734.jpg">
                <h3>Biography of a Great Mind</h3>
                <p>Biography</p>
            </div>

            <div class="card">
                <img src="https://tse3.mm.bing.net/th/id/OIP.g1545HhqQPgv0LtcbMhYIwHaE8?pid=Api&P=0&h=180" alt="Book">
                <h3>Poetry on Life</h3>
                <p>Poetry</p>
            </div>

            <div class="card">
                <img src="https://i.etsystatic.com/30116883/r/il/29b34f/5097886747/il_fullxfull.5097886747_qwjk.jpg" alt="Book">
                <h3>Comedy of Errors</h3>
                <p>Comedy</p>
            </div>

            <div class="card">
                <img src="https://news.tccd.edu/wp-content/uploads/2022/12/Library-Stacks-scaled.jpg" alt="Book">
                <h3>Library Articles</h3>
                <p>Articles</p>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba" alt="Book">
                <h3>Adventures on Mountains, Oceans & Beaches</h3>
                <p>Travel</p>
            </div>

        </div>
    </section>


    <!-- Featured Drinks -->
    <section class="section drinks">
        <h2 class="section-title">Featured Drinks</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" alt="Coffee">
                <h3>Cappuccino</h3>
                <p>₹120</p>
            </div>

            <div class="card">
                <img src="https://www.forkinthekitchen.com/wp-content/uploads/2022/06/220518.vanilla.latte-6410.jpg">
                <h3>Vanilla Latte</h3>
                <p>₹150</p>
            </div>

            <div class="card">
                <img src="https://fnb.coffee/wp-content/uploads/2025/07/Cold-Brew-Coffee.webp">
                <h3>Cold Brew</h3>
                <p>₹160</p>
            </div>

            <div class="card">
                <img src="https://coffeexplore.com/wp-content/uploads/2023/05/what-is-an-americano-coffee.jpg" alt="Cold Coffee">
                <h3>Americano</h3>
                <p>₹100</p>
            </div>

            <div class="card">
                <img src="https://www.tasteofhome.com/wp-content/uploads/2023/03/TOH-espresso-GettyImages-1291298315-JVcrop.jpg" alt="Coffee">
                <h3>Espresso</h3>
                <p>₹90</p>
            </div>
            
            <div class="card">
                <img src="https://www.thespruceeats.com/thmb/Hz677yfVdPECquUOekjv0b9yXTE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-mocha-4797918-step-04-599987714aec41aba02f1f870e900dd8.jpg" alt="Latte">
                <h3>Mocha</h3>
                <p>₹170</p>
            </div>

            <div class="card">
                <img src="http://primulaproducts.com/cdn/shop/articles/MicrosoftTeams-image_1200x1200.png?v=1721058565" alt="Cold Coffee">
                <h3>Caramel Macchiato</h3>
                <p>₹180</p>
            </div>
            
            <div class="card">
                <img src="https://www.acozykitchen.com/wp-content/uploads/2017/04/IcedMatchaLatte-1.jpg" alt="Cold Coffee">
                <h3>Matcha Latte</h3>
                <p>₹160</p>
            </div>

            <div class="card">
                <img src="https://budleaf.com/wp-content/uploads/2023/04/How-to-make-masala-chai-scaled.jpeg" alt="Masala Tea">
                <h3>Masala Tea</h3>
                <p>₹40</p>
            </div>

            <div class="card">
                <img src="https://cff2.earth.com/uploads/2022/07/29091859/Green-tea-scaled.jpg" alt="Green Tea">
                <h3>Green Tea</h3>
                <p>₹90</p>
            </div>

            <div class="card">
                <img src="https://cdn.loveandlemons.com/wp-content/uploads/2025/01/chai-latte.jpg" alt="Cold Coffee">
                <h3>Chai Latte</h3>
                <p>₹120</p>
            </div>

            <div class="card">
                <img src="https://rtowndiner.com/wp-content/uploads/2023/04/Indulgent-Hot-Chocolate-FT-RECIPE0223-fd36942ef266417ab40440374fc76a15.jpg" alt="Cold Coffee">
                <h3>Hot Chocolate</h3>
                <p>₹150</p>
            </div>

            <div class="card">
                <img src="https://insanelygoodrecipes.com/wp-content/uploads/2023/01/Affogato-3.jpg" alt="Cold Coffee">
                <h3>Affogato</h3>
                <p>₹200</p>
            </div>
            
            <div class="card">
                <img src="https://www.theendlessmeal.com/wp-content/uploads/2023/01/Irish-coffee-3.jpg" alt="Cold Coffee">
                <h3>Irish</h3>
                <p>₹250</p>
            </div>

            <div class="card">
                <img src="https://www.tankcoffee.com/wp-content/uploads/2024/12/introduction-335529931-1024x585.jpg" alt="Cold Coffee">
                <h3>Frappe</h3>
                <p>₹180</p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Book Café | Sip. Read. Relax.</p>
    </footer>

    <script>

        function toggleMenu(){
        let menu = document.getElementById("navLinks");
        menu.classList.toggle("active");
        }
    </script>
</body>
</html>

