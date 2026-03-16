<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books | Book Café</title>
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
    <section class="books-hero">
        <div class="hero-content">
            <h1>Sip. Read. Relax.</h1>
            <p>Discover your next favorite book while enjoying coffee.</p>
        </div>
    </section>

    <!-- Featured Books -->
    <section class="section">
        <h2 class="section-title">📚 Featured Books</h2>
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
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba" alt="Book">
                <h3>Adventures on Mountains, Oceans & Beaches</h3>
                <p>Travel</p>
            </div>

        </div>
    </section>

    <!-- Fiction Category -->
    <section class="section category-bg">
        <h2 class="section-title">✨ Fiction</h2>
        <div class="card-container">

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/51M553lNOpL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Perfectly Imperfect</h3>
                <p>₹223</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81tJYqC0jGL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Before I Go</h3>
                <p>₹399</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71qdak3g1CL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>A Shimla Affair</h3>
                <p>₹176</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71zpck45b2L._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Can We Be Stranger Again?</h3>
                <p>₹203</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71xxddxprOL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Days at the Morisaki Bookshop</h3>
                <p>₹271</p>
            </div>
            
        </div>
    </section>

    <!-- Romance Category -->
    <section class="section">
        <h2 class="section-title">💖 Romance</h2>
        <div class="card-container">

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2025/05/1-I-Too-Had-A-Love-Story.jpg">
                <h3>I Too Had A Love Story</h3>
                <p>₹232</p>
            </div>

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2025/05/2-2-States_.jpg">
                <h3>2 States</h3>
                <p>₹195</p>
            </div>

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2025/05/3-The-Zoya-Factor.jpg">
                <h3>The Zoya Factor</h3>
                <p>₹324</p>
            </div>

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2025/05/4-Worlds-Best-Girlfriend.jpg">
                <h3>World's Best Girlfriend</h3>
                <p>₹182</p>
            </div>
            
            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2025/05/5-A-SUITABLE-BOY.jpg">
                <h3>A suitable Boy</h3>
                <p>₹1472</p>
            </div>

        </div>
    </section>

    <!-- Self Help Category -->
    <section class="section category-bg">
        <h2 class="section-title">🌿 Self-Help</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2024/05/power-of-positive-thinking.jpg">
                <h3>Power of Positive Thinking</h3>
                <p>₹290</p>
            </div>

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2024/05/7-habits-of-highly-effective-people.jpg">
                <h3>7 Habits of Highly Effective People</h3>
                <p>₹699</p>
            </div>  
            
            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2024/05/2how-to-win-friends.jpg">
                <h3>How to Win Friends and Influence People</h3>
                <p>₹213</p>
            </div>  

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2024/05/ikigai.jpg">
                <h3>Ikigai</h3>
                <p>₹299</p>
            </div>  

            <div class="card">
                <img src="https://litfind.bookscape.com/wp-content/uploads/2024/05/The-Power-of-Your-Subconscious-Mind.jpg">
                <h3>The Power of Your Subconscious Mind</h3>
                <p>₹193</p>
            </div>  

        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> 💪 Motivation</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81T05w0B3lL._SL1500_.jpg">
                <h3>You Can</h3>
                <p>₹99</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/41T9-rpjIFL._SY445_SX342_FMwebp_.jpg">
                <h3>Attitude is Everything</h3>
                <p>₹174</p>
            </div>    
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71RatA+9EzL._AC_UL480_FMwebp_QL65_.jpg">
                <h3>You Are Born To Blossom</h3>
                <p>₹217</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/41S8TQ9aNoL._SY445_SX342_FMwebp_.jpg">
                <h3>Life's Amazing Secrets</h3>
                <p>₹197</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/41sNrMt-d2L._SY445_SX342_FMwebp_.jpg">
                <h3>Stop Letting Everything Affect You</h3>
                <p>₹284</p>
            </div> 
            
        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title">😇 Fantasy</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://media.assettype.com/homegrown/2024-10-02/11qqreeg/27245999.jpg?w=1536">
                <h3>The Devourers</h3>
                <p>₹499</p>
            </div>

            <div class="card">
                <img src="https://media.assettype.com/homegrown%2F2024-10-02%2Frybifyd6%2F50523477.jpg?w=1024&auto=format%2Ccompress">
                <h3>The Jasmine Throne</h3>
                <p>₹420</p>
            </div>    
            
            <div class="card">
                <img src="https://media.assettype.com/homegrown%2F2024-10-02%2Ffhe9898f%2F71B0AS7PgBL.ACUF10001000QL80.jpg?w=1024&auto=format%2Ccompress">
                <h3>The Ivory Key</h3>
                <p>₹443</p>
            </div> 

            <div class="card">
                <img src="https://media.assettype.com/homegrown%2F2024-10-02%2Fm38yezq6%2F711137534510953888631172510251129636280505n.png?w=1024&auto=format%2Ccompress">
                <h3>Hunted by the Sky</h3>
                <p>₹821</p>
            </div> 

            <div class="card">
                <img src="https://media.assettype.com/homegrown%2F2024-10-02%2Focj99ktm%2F676885.jpg?w=1024&auto=format%2Ccompress">
                <h3>The Simoqin Prophecies</h3>
                <p>₹214</p>
            </div> 
        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title">💀 Horror</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://rukminim2.flixcart.com/image/612/612/xif0q/book/y/q/o/ghosts-of-the-silent-hills-original-imagy3fn5atnhpgb.jpeg?q=70">
                <h3>Ghosts of the Silent Hills</h3>
                <p>₹179</p>
            </div>

            <div class="card">
                <img src="https://rukminim2.flixcart.com/image/612/612/xif0q/book/x/u/e/dracula-original-imagy32epbqbskbx.jpeg?q=70">
                <h3>Dracula</h3>
                <p>₹489</p>
            </div>  

            <div class="card">
                <img src="https://rukminim2.flixcart.com/image/612/612/xif0q/book/s/t/g/greatest-horror-stories-from-around-the-world-deluxe-hardbound-original-imahj8rbazbg79ak.jpeg?q=70">
                <h3>Greatest Horror Stories from Around the World</h3>
                <p>₹299</p>
            </div>

            <div class="card">
                <img src="https://rukminim2.flixcart.com/image/3200/4260/xif0q/book/t/z/g/enter-at-your-own-risk-original-imahft5vpdtkqhry.jpeg?q=60">               
                <h3>Enter at Your Own Risk</h3>
                <p>₹219</p>
            </div>
            
        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title">💀 Thriller</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/51FYJGn8LVL._SX342_SY445_FMwebp_.jpg">
                <h3>The Whispering Delulu</h3>
                <p>₹305</p>
            </div>

            <div class="card">
                <img src="https://images-eu.ssl-images-amazon.com/images/I/61qTWmEi5GL._AC_UL232_SR232,232_.jpg">
                <h3>Never Lie</h3>
                <p>₹335</p>
            </div>       
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81b1PP4RK1L._SL1500_.jpg">
                <h3>That Night</h3>
                <p>₹184</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/91tVxoFevzL._SL1500_.jpg">
                <h3>The Mussoorie Murders</h3>
                <p>₹220</p>
            </div>
        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> 🕉️Spirituality</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://images-eu.ssl-images-amazon.com/images/I/81cvMup8fFL._AC_UL600_SR600,400_.jpg">
                <h3>Thirteen Months In Himalayas </h3>
                <p>₹293</p>
            </div>

            <div class="card">
                <img src="https://images-eu.ssl-images-amazon.com/images/I/91JO2pVO7RL._AC_UL600_SR600,400_.jpg">
                <h3>Death</h3>
                <p>₹194</p>
            </div>    
            
            <div class="card">
                <img src="https://images-eu.ssl-images-amazon.com/images/I/610GQwtERDL._AC_UL600_SR600,400_.jpg">
                <h3>Sundarkand</h3>
                <p>₹279</p>
            </div>  
            
            <div class="card">
                <img src="https://images-eu.ssl-images-amazon.com/images/I/51zZwcRKx0L._AC_UL300_SR300,200_.jpg">
                <h3>Bhramhchary</h3>
                <p>₹299</p>
        </div>
    </section>
    
    <section class="section category-bg">
        <h2 class="section-title">☠️ Dark Fantsy</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/51Nal-qRsyL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Hunting Adeline</h3>
                <p>₹199</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81l5OENWtjL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Book of Azrael</h3>
                <p>₹509</p>
            </div>    
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71Xz0GHTjnL._AC_UL480_FMwebp_QL65_.jpg">
                <h3>Promise of Darkness</h3>
                <p>₹1,150</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/817cyZqBeSL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Tailored Realities</h3>
                <p>₹653</p>
            </div>
        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title">🧬 Science - Fiction</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/61fR6OnVBUL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Theory of Everythings</h3>
                <p>₹160</p>
            </div>

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81uvCkcYSFL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Kid Who Came From Space</h3>
                <p>₹257</p>
            </div>        

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/814gL4MlpyL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Voyagers of The Lost Earth</h3>
                <p>₹257</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/618Jw+2C6QL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Time Machine</h3>
                <p>₹199</p>
            </div> 

        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> 🕵️ Mystrey</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81Hl5oMzFlL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Secret Key</h3>
                <p>₹255</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71rhWTz2YYL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Mistery of Missing Cat</h3>
                <p>₹211</p>
            </div>      

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/810WDVNkD-L._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Mystery of The School On Fire</h3>
                <p>₹216</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81HK9JFPNaL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Case closed</h3>
                <p>₹402</p>
            </div> 
        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> 😊 Biography</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81lZ-9E4F-S._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Diary Of a Young Girl</h3>
                <p>₹149</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/61HGmcAr-lL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>My Journey</h3>
                <p>₹210</p>
            </div> 
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81z3oXDxY6L._AC_UY327_FMwebp_QL65_.jpg">
                <h3>My Inventions</h3>
                <p>₹133</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/812vIYc8luL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Three Thousand Stitches </h3>
                <p>₹207</p>
            </div> 

        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> ✒️Poetry</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81uND7JqfTL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Ek Ajab Gajab Shayar</h3>
                <p>₹179</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71c+FGTn0oL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Kuchh Ishq Kiya Kuchh Kaam Kiya </h3>
                <p>₹66</p>
            </div>     
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/61xjURomnxL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Greatest Poetry Ever Written </h3>
                <p>₹224</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81V8GnD8GmL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Selected Poems</h3>
                <p>₹191</p>
            </div>  

        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> 😂 Comedy</h2>
        <div class="card-container">
           <div class="card">
                <img src="https://m.media-amazon.com/images/I/71SwWCs55FL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>The Comedy of Errors</h3>
                <p>₹99</p>
            </div> 
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71X34c-QNNL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Three Men In a Boat</h3>
                <p>₹159</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71kXMBKI8OL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Funny Story</h3>
                <p>₹341</p>
            </div> 

        </div>
    </section>

    <section class="section category-bg">
        <h2 class="section-title"> 🏞️ Travel</h2>
        <div class="card-container">
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71-4IfJ7reL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>When Mountains Align</h3>
                <p>₹269</p>
            </div> 
            
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/71YiL2L9T7L._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Solo</h3>
                <p>₹274</p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/81OsBVXBYnL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Abroad in japan</h3>
                <p>₹435/p>
            </div> 

            <div class="card">
                <img src="https://m.media-amazon.com/images/I/8163yiXVXEL._AC_UY327_FMwebp_QL65_.jpg">
                <h3>Banaras</h3>
                <p>₹169</p>
            </div> 
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <p>© 2026 Book Café | Where Coffee Meets Stories</p>
    </footer>

     <script>

        function toggleMenu(){
        let menu = document.getElementById("navLinks");
        menu.classList.toggle("active");
        }
    </script>
</body>
</html>