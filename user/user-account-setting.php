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
            <h2 class="order-title">Account Setting</h2>

            <form action="" class="user-form">
                <div class="row">
                    <div class="input-box fname">
                        <label>First Name</label>
                        <input type="text" name="fname" id="fname" required disabled placeholder="<?php echo htmlspecialchars($firstname); ?>">
                    </div>
                    <div class="input-box lname">
                        <label>Last Name</label>
                        <input type="text" name="lname" id="lname" required disabled placeholder="<?php echo htmlspecialchars($lastname); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-box uname">
                        <label>Username</label>
                        <input type="text" name="uname" id="uname" required disabled placeholder="<?php echo htmlspecialchars($username); ?>">
                    </div>
                    <div class="input-box email">
                        <label>Email</label>
                        <input type="email" name="email" id="email" required disabled placeholder="<?php echo htmlspecialchars($email); ?>">
                    </div>
                </div>
                <div class="input-box num">
                    <label>Mobile Number</label>
                    <input type="text" name="num" id="num" required disabled placeholder="<?php echo htmlspecialchars($phonenum); ?>">
                </div>
                <div class="input-box password">
                    <label>Password</label>
                    <input type="password" name="pword" id="pword" required disabled>
                </div>
                <div class="input-box new-password">
                    <label>Confirm New Password</label>
                    <input type="password" name="npword" id="npword" required disabled>
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