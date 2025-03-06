<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple | Login</title>
    <link rel="stylesheet" href="./user/styles.css">
    <link rel="stylesheet" href="./user/login.css">
</head>
<body>
    <?php
        //links 
        $link_to_login = "login.php";
        $link_to_signup = "sign-up.php";

        require('./connection.php');
        session_start();

        if (isset($_POST['login'])) {
            // $_SESSION['validate'] = false;
            $username = $_POST['username'];
            $password = $_POST['password'];

            $p=userdata::connect()->prepare('SELECT * FROM User WHERE username=:username');
            $p->bindValue(':username', $username);
            $p->execute();
            $user = $p->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // manual hashing
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Verify the password
                if (password_verify($password, $hashedPassword)) {

                    // store credentials for reference later
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['last_name'] = $user['last_name'];
                    $_SESSION['phone_num'] = $user['phone_num'];    

                    echo "<script>alert('Login successful!'); window.location.href='./user/home/home-airpods.php';</script>";
                    exit();
                } else {
                    echo "❌ Password mismatch!<br>";
                }
            } 
            exit();
        }

        $p=userdata::connect()->prepare('SELECT * FROM User WHERE username=:username AND password=:password');
    ?>
    <header>
        <!-- redirect to login.php -->
        <a href="<?php echo $link_to_login; ?>">
            <img src="assets/apple.png" class="icon" alt="apple-logo">
        </a>
    </header>
    <section class="div-container">
        <div>
            <h1 class="title">Sign in to Apple Store</h1>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <label for="remember-me"> 
                    <input class="inline text-middle" type="checkbox"> Remember me 
                </label>
            </form>
            
            <!-- redirect to sign-up.php -->
            <p class="bottom-text">Don't have an Apple account? <a class="link-styling" href="<?php echo $link_to_signup; ?>">Create yours now</a></p>
        </div>
    </section>
</body>
</html>