<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple | Login</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <?php
        //links 
        $link_to_login = "login.php";
        $link_to_signup = "sign-up.php";


        require('./connection.php');
        if (isset($_POST['login'])) {
            $_SESSION['validate'] = false;
            $username = $_POST['username'];
            $password = $_POST['password'];

            $p=userdata::connect()->prepare('SELECT * FROM User WHERE username=:username AND password=:password');
            $p->bindValue(':username', $username);
            $p->bindValue(':password', $password);
            $p->execute();
            $d=$p->fetchAll(PDO::FETCH_ASSOC);

            if ($p->rowCount() > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['validate'] = true;

                
                echo "<script>alert('Login successful!')</script>";
                // redirect to home page
                header('location:home-airpods.html');
            } else {
                echo "<script>alert('Invalid username or password!')</script>";
            }

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