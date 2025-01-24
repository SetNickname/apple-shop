<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apple | AirPods</title>
        <link rel="stylesheet" href="/admin/style.css">
        <link rel="stylesheet" href="/user/user.css">
        <link rel="stylesheet" href="/user/account-container-hidden.css">
        <link rel="icon" href="/assets/apple.png">
    </head>
    <body>
        <?php 
            //links
            $user_navbar_script = "/user/user-navbar-scripts.js";
            $hide_show_bag = "/user/hide-show-bag.js";
        
        ?>
        <div class="bag-container">
            <header>
                <h2 class="header-text">Your Bag is empty</h2>
            </header>
            <section class="profile-section">
                <p class="profile-text">My Profile</p>
                <nav class="bag-nav-link">
                    <ul>
                        <li>
                            <img src="/assets/box.png" alt="order icon" class="logo-size">
                            <a href="#">Orders</a>
                        </li>
                        <li>
                            <img src="/assets/bag.png" alt="cart icon" class="logo-size">
                            <a href="#">Cart</a>
                        </li>
                        <li>
                            <img src="/assets/account.png" alt="account icon" class="logo-size">
                            <a href="#">Account</a>
                        </li>
                    </ul>
                </nav>
                <a href="#" class="back-btn" id="hide-bag-btn">BACK</a>
            </section>
        </div>
        <!-- blur this body when container is shown -->
        <div id="target-body">
            <header>
                <div class="home-link logo-hover">
                    <img src="/assets/apple.png" alt="apple logo" class="logo-size">
                </div>
                <nav class="navigation-bar">
                    <ul>
                        <li>
                            <a href="#" class="nav-link active">AirPods</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">iPhone</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Accessories</a>
                        </li>
                    </ul>
                </nav>
                <div class="cart-link logo-hover">
                    <img src="/assets/bag.png" alt="cart bag" class="logo-size" id="show-bag-btn">
                </div>
            </header>
            <main>
                <section class="main-hero">
                    <img class="hero-img" src="/assets/hero.png" alt="airpods pro 2">
                </section>
                <section class="description-text">
                    <h2 class="h2-bold">Five fresh colors. Bold sound</h2>
                    <h3 class="h3-text">$549</h3>
                </section>
                <section class="buy-section">
                    <div class="center-btn">
                        <a href="">More Products</a>
                    </div>
                    <div class="right-btn">
                        <a href="">Buy</a>
                    </div>
                </section>
            </main>
        </div>
        <script src="<?php echo $user_navbar_script; ?>"></script>
        <script src="<?php echo $hide_show_bag; ?>"></script>
    </body>
</html>