<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>

        <link rel="stylesheet" href="../admin/style.css"> 
        <link rel="stylesheet" href="./cart-product.css"> 
        <link rel="stylesheet" href="./order-navbars.css">
        <link rel="icon" href="../assets/apple.png">
    </head>
    <body>
        <?php 
            //links 
            $order_navbar = "./order-navbar.js";
            $cart_js = "./cart.js";

            session_start(); 

            if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
                $username = $_SESSION['username'];
                $email = $_SESSION['email'];

                $firstname = $_SESSION['first_name'];
                $lastname = $_SESSION['last_name'];
                $phonenum = $_SESSION['phone_num'];

            } else {
                $username = "Guest";
                $email = "Not logged in";
            }

        ?>
        <div class="orders">
            <aside class="sidebar">
                <div class="sidebar-header">
                    <a href="#" class="home-btn" id="home">
                        <img src="../assets/apple.png" alt="apple logo" width="30" height="30">
                        <h1>Home</h1>
                    </a>
                </div>
                <ul class="side-nav-menu">
                    <li class="side-nav-item" id="Orders">
                        <a href="# " class="side-nav-link"> 
                            <img src="../assets/box.png" alt="box logo">
                            Orders
                        </a>
                    </li>
                    <li class="side-nav-item" id="Cart">
                        <a href="#" class="side-nav-link active">
                            <img src="../assets/bag.png" alt="bag logo">
                            Cart
                        </a>
                    </li>
                    <li class="side-nav-item" id="Account">
                        <a href="#" class="side-nav-link">
                            <img src="../assets/account.png" alt="account logo">
                            Account
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <div class="user-profile">
                        <div class="user-details">
                            <div class="user-name"><?php echo htmlspecialchars($username); ?></div>
                            <div class="user-email"><?php echo htmlspecialchars($email); ?></div>
                        </div>
                        <a href="#" class="logout-btn" id="log-out">
                            <img src="../assets/log out.png" alt="log-out logo" width="20" height="20">
                        </a>
                    </div>
                </div>
            </aside>

            <main class="main-content">
                <h2 class="order-title">Cart</h2>
                <div class="cart-grid">
                    <div class="cart-card">
                        <div class="cprod-info">
                            <input type="checkbox" id="cprod" name="cprod" value="cprod">
                            <img src="../assets/prod10.png" alt="prod-pic">
                            <div class="cprod-details">
                                <h3 class="cprod-name">iPhone 15 Plus</h3>
                                <p class="cprod-variation">Pink &#183; 512GB</p>
                            </div>
                        </div>
                        <div class="qty">
                            <button>-</button>
                            <span class="qtyval">1</span>
                            <button>+</button>
                        </div>
                        <div class="cprod-price">$1099.00</div>
                    </div>

                    <div class="cart-card">
                        <div class="cprod-info">
                            <input type="checkbox" id="cprod" name="cprod" value="cprod">
                            <img src="../assets/prod11.png" alt="prod-pic">
                            <div class="cprod-details">
                                <h3 class="cprod-name">iPhone 14</h3>
                                <p class="cprod-variation">Purple &#183; 128GB</p>
                            </div>
                        </div>
                        <div class="qty">
                            <button>-</button>
                            <span class="qtyval">1</span>
                            <button>+</button>
                        </div>
                        <div class="cprod-price">$599.00</div>
                    </div>
                </div>

                <a href="#" class="check-btn" id="check-out-btn">
                    Checkout
                </a>
            </main>
        </div>

        <script src="<?php echo $order_navbar; ?>"></script>
        <script src="<?php echo $cart_js; ?>"></script>
    </body>
</html>