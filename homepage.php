<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Navigation Bar --><!-- Navigation Bar with Settings Icon --><!-- Navigation Bar with Settings Icon -->
<header>
    <nav class="navbar">
        
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="shopcart.php" class="shoppingcart" onclick="shoppingcart()"><span class="text">View Shopping Cart</span></a></li>
            <li><a href="account.php" class="accountsettings" onclick="accountsettings()"><span class="text">Account Settings</span></a></li>
            <li><a href="logout.php" class="logout" onclick="logout()"><span class="text">Logout</span></a></li>
        </ul>

        <!-- Search and Settings Icons -->
        <div class="nav-icons">
            <input type="text" id="search-bar" class="search-bar" placeholder="Search...">
            
            <!-- Settings Icon -->
            <div class="settings-icon" id="settings-icon">
                <img src="IMG/bxs-user (1).svg">
            </div>

            <!-- Settings Dropdown Menu (hidden by default) -->
            <div id="settings-menu" class="settings-menu">
                <h3>Settings</h3>
                <ul>
                  <a href="setting.html" class="account">
                 <span class="text">Account Settings</span>
                 </a>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>



    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Welcome Euthalia Fancies!</h1>
        <p>Make your experience special and memorable</p>
        <a href="#services" class="btn">SHOP –></a>
    </section>
    
    <!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="about-text">
            <h2>About Us</h2>
            <p>Welcome to Euthalia Fancies We specialize in providing Best flowershop for every occasion, from weddings to everyday bouquets. Our team is passionate about bringing beauty and joy through the language of flowers. With years of experience in the floral industry, we ensure that each arrangement is carefully curated with love and attention to detail.</p>
            <p>Our mission is to create memorable experiences for our customers by offering Best floweshops that gives exceptional customer service. Whether you're celebrating a special event or just brightening someone's day, we’re here to help you express your emotions with flowers.</p>
        </div>
        <div class="about-image">
            <img src="IMG/Flower shop logo.png" alt="Flower Shop">
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <h2>Our Flower Shops</h2>
        <p>Explore our different flower shops, each offering unique services to cater to your floral needs. Whether you're planning a wedding, event, or just need a beautiful bouquet, we’ve got you covered!</p>

        <div class="services-grid">
            <!-- Flower Shop 1 -->
            <div class="service-item">
                <img src="IMG/flower-shop-1.jpg" alt="Flower Shop 1">
                <h3>Flower Shop 1</h3>
                <p>Offering a variety of fresh flowers for all occasions. Specializing in wedding bouquets and corporate events.</p>
                <a href="cart.php" >View Shop</a>
            </div>

            <!-- Flower Shop 2 -->
            <div class="service-item">
                <img src="IMG/flower-shop-2.jpg" alt="Flower Shop 2">
                <h3>Flower Shop 2</h3>
                <p>Beautiful flower arrangements for birthdays, anniversaries, and home decor. Delivery services available.</p>
                <a href="cart2.php" >View Shop</a>
            </div>

            <!-- Flower Shop 3 -->
            <div class="service-item">
                <img src="IMG/flower-shop-3.jpg" alt="Flower Shop 3">
                <h3>Flower Shop 3</h3>
                <p>Expert florists providing custom arrangements and floral gifts. We focus on personalized service and quality.</p>
                <a href="cart3.php" >View Shop</a>
            </div>

            <!-- Flower Shop 4 -->
            <div class="service-item">
                <img src="IMG/flower-shop-4.jpg" alt="Flower Shop 4">
                <h3>Flower Shop 4</h3>
                <p>Luxury floral services for events, weddings, and corporate functions. We offer bespoke designs to suit any occasion.</p>
                <a href="cart4.php" >View Shop</a>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews" id="reviews">
    <div class="container">
        <h2>What Our Customers Are Saying</h2>
        <p>Read some of the reviews from our happy customers who loved our floral services. We value customer satisfaction and strive to make every experience special.</p>

        <div class="reviews-grid">
            <!-- Review 1 -->
            <div class="review-item">
                <div class="review-content">
                    <p>"The flowers I ordered for my wedding were absolutely stunning! The team at Flower Shop 1 went above and beyond to create beautiful arrangements that exceeded my expectations."</p>
                </div>
                <div class="reviewer">
                    <img src="IMG/customer-1.jpg" alt="Customer 1">
                    <div>
                        <h4>Jane Doe</h4>
                        <p>Wedding</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="review-item">
                <div class="review-content">
                    <p>"I ordered a birthday bouquet, and it was delivered on time and was simply gorgeous! I’ll definitely be returning for my future floral needs."</p>
                </div>
                <div class="reviewer">
                    <img src="IMG/customer-2.jpg" alt="Customer 2">
                    <div>
                        <h4>John Smith</h4>
                        <p>Birthday</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="review-item">
                <div class="review-content">
                    <p>"Excellent service! The flowers were fresh, the arrangements were beautiful, and the customer service was amazing. Highly recommend!"</p>
                </div>
                <div class="reviewer">
                    <img src="IMG/customer-3.jpg" alt="Customer 3">
                    <div>
                        <h4>Emily Davis</h4>
                        <p>Corporate Event</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1199.8578735148642!2d121.16283216422113!3d14.209556372917104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6326e2f41361%3A0xca8b3e9ce27a146a!2siKenBuild%2C%20OPC%20(Calamba)!5e1!3m2!1sen!2sph!4v1731997020310!5m2!1sen!2sph" width="2300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

    <footer>
        <p>&copy; 2024 Euthalia Fancies. All Rights Reserved.</p>
    </footer>
    
    <script src="home.js"></script>
</body>
</html>
