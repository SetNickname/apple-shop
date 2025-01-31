<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Setting</title>

    <link rel="stylesheet" href="../admin/style.css"> 
    <link rel="stylesheet" href="./order-navbars.css">
    <link rel="stylesheet" href="./user-account-setting.css">
    <link rel="icon" href="../assets/apple.png">
</head>
<body>
    <?php 
        //links
        $order_navbar = "./order-navbar.js";
        $user_account_setting = "./user-account-setting.js";

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
                    <a href="#" class="side-nav-link ">
                        <img src="../assets/bag.png" alt="bag logo">
                        Cart
                    </a>
                </li>
                <li class="side-nav-item" id="Account">
                    <a href="#" class="side-nav-link active">
                        <img src="../assets/account.png" alt="account logo">
                        Account
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-details">
                        <div class="user-name">User</div>
                        <div class="user-email">user@gmail.com</div>
                    </div>
                    <a href="#" class="logout-btn" id="log-out">
                        <img src="../assets/log out.png" alt="log-out logo" width="20" height="20">
                    </a>
                </div>
            </div>
        </aside>
        <main class="main-content">
            <h2 class="order-title">Account Setting</h2>

            <form action="" class="user-form">
                <div class="row">
                    <div class="input-box fname">
                        <input type="text" name="fname" id="fname" required disabled>
                        <label>First Name</label>
                    </div>
                    <div class="input-box lname">
                        <input type="text" name="lname" id="lname" required disabled>
                        <label>Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-box uname">
                        <input type="text" name="uname" id="uname" required disabled>
                        <label>Username</label>
                    </div>
                    <div class="input-box email">
                        <input type="email" name="email" id="email" required disabled>
                        <label>Email</label>
                    </div>
                </div>
                <div class="input-box num">
                    <input type="text" name="num" id="num" required disabled>
                    <label>Mobile Number</label>
                </div>
                <div class="input-box password">
                    <input type="password" name="pword" id="pword" required disabled>
                    <label>Password</label>
                </div>
                <div class="input-box new-password">
                    <input type="password" name="npword" id="npword" required disabled>
                    <label>Confirm New Password</label>
                </div>

                <button class="edit-btn" id="edit-btn">
                    Edit
                </button>.
                <div id="notification" class="hidden">
                    <span>&#10004;</span> <!-- Check icon -->
                    Changes Saved Successfully
                </div>
            </form>

        </main>
    </div>

    <script src="<?php echo $order_navbar; ?>"></script>
    <script src="<?php echo $user_account_setting; ?>"></script>
</body>
</html>