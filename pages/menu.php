<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu | Book Café</title>
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
    <section class="menu-hero">
        <div class="hero-content">
            <h1>Sip. Read. Relax.</h1>
            <p>Explore our handcrafted beverages & cozy snacks.</p>
        </div>
    </section>

    <!-- Coffee Section -->
    <section class="section">
        <h2 class="section-title"> Coffee</h2>
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

    <!-- Tea Section -->
    <section class="section drinks">
        <h2 class="section-title"> Tea</h2>
        <div class="card-container">

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
                <img src="https://cdn.loveandlemons.com/wp-content/uploads/2025/01/chai-latte.jpg" alt="Chai Latte">
                <h3>Chai Latte</h3>
                <p>₹120</p>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187">
                <h3>Lemon Tea</h3>
                <p>₹85</p>
            </div>

        </div>
    </section>

    <!-- Snacks Section -->
    <section class="section">
        <h2 class="section-title"> Snacks</h2>
        <div class="card-container">

            <div class="card">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff">
                <h3>Butter Croissant</h3>
                <p>₹110</p>
            </div>

            <div class="card">
                <img src="https://thehintofrosemary.com/wp-content/uploads/2020/02/ramen-cover-2048x2048.jpg">
                <h3>Ramen Noodles</h3>
                <p>₹250</p>
            </div>

            <div class="card">
                <img src="https://2.bp.blogspot.com/-bH2v_WSwDQk/WXrPL60SR2I/AAAAAAAADts/hAZ6o8qGmXMaTr56y66hipH615KZiP5MwCLcBGAs/s1600/DSC01712.JPG">
                <h3>Veg Sandwich</h3>
                <p>₹130</p>
            </div>

            <div class="card">
                <img src="https://www.awesomecuisine.com/wp-content/uploads/2021/03/grilled-cheese-sandwich.jpg">
                <h3>Grilled Cheese Sandwich</h3>
                <p>₹110</p>
            </div>

            <div class="card">
                <img src="https://vegecravings.com/wp-content/uploads/2018/07/Veggie-Burger-Recipe-Step-By-Step-Instructions.jpg">
                <h3>Veg Burger</h3>
                <p>₹120</p>
            </div>

            <div class="card">
                <img src="https://foodcoordinates.com/wp-content/uploads/2018/09/paneer_tikka_wraps-1.jpg">
                <h3>Paneer Wrap</h3>
                <p>₹140</p>
            </div>

            <div class="card">
                <img src="https://goldenfingers.us/wp-content/uploads/2020/03/french_fry.jpg">
                <h3>French Fries</h3>
                <p>₹100</p>
            </div>

            <div class="card">
                <img src="https://static01.nyt.com/images/2018/12/11/dining/as-garlic-bread/as-garlic-bread-jumbo.jpg">
                <h3>Garlic Bread</h3>
                <p>₹90</p>
            </div>

            <div class="card">
                <img src="https://cdn.loveandlemons.com/wp-content/uploads/2019/09/margherita-pizza.jpg">
                <h3>Margherita Pizza</h3>
                <p>₹220</p>
            </div>

            <div class="card">
                <img src="https://static.vecteezy.com/system/resources/previews/048/638/105/non_2x/rustic-style-pizza-with-varied-toppings-on-white-farmhouse-table-deep-brown-background-background-free-photo.jpg">
                <h3>Farmhouse Pizza</h3>
                <p>₹280</p>
            </div>

            <div class="card">
                <img src="https://1.bp.blogspot.com/-xaeLKD4vj1A/YCi3eo5T85I/AAAAAAAAAHA/D6C1A6EHdQIFkTqYpPvQoM6ffYdmghogQCLcBGAsYHQ/s1276/IMG_20210214_110659.jpg">
                <h3>Steam Momos</h3>
                <p>₹60</p>
            </div>

            <div class="card">
                <img src="https://www.zippyfeed.com/wp-content/uploads/2023/01/Peri-Paneer-FriedMomo.jpg">
                <h3>Fried Momos</h3>
                <p>₹80</p>
            </div>

            <div class="card">
                <img src="https://res.cloudinary.com/norgesgruppen/images/c_scale,dpr_auto,f_auto,q_auto:eco,w_1600/tulcxcntmwnys5ndgqvk/pasta-alfredo">
                <h3>Pasta Alfredo</h3>
                <p>₹200</p>
            </div>
            
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Book Café | Made with love</p>
    </footer>

     <script>

        function toggleMenu(){
        let menu = document.getElementById("navLinks");
        menu.classList.toggle("active");
        }
    </script>
</body>
</html>