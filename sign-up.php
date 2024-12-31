<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple | Login</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./sign-up.css">
</head>
<body>
    <?php
        //links 
        $link_to_login = "login.php";

        require('./connection.php');
        if (isset($_POST['signup'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $phonenum = $_POST['phonenum'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confpassword = $_POST['confpassword'];

            if ($password == $confpassword) {
                $p=userdata::connect()->prepare('INSERT INTO User (first_name, last_name, username, email, phone_num, password) VALUES (:fname, :lname, :username, :email, :phonenum, :password)');
                $p->bindValue(':fname', $fname);
                $p->bindValue(':lname', $lname);
                $p->bindValue(':username', $username);
                $p->bindValue(':email', $email);
                $p->bindValue(':phonenum', $phonenum);
                $p->bindValue(':password', $password);
                $p->execute();

                // redirect to login page
                header('location:login.php');
            } else {
                echo "<script>alert('Passwords do not match!')</script>";
            }
            

        }
    ?>
    <header>
        <!-- redirect to login.php -->
        <a href="<?php echo $link_to_login; ?>"> 
            <img src="assets/apple.png" class="icon" alt="apple-logo">
        </a>
    </header>
    <section class="reminder">
        <p class="subtext">Apple ID is now Apple Account. You can still sign in with the same email address or phone number and password.</p>
    </section>
    <section class="div-container">
        <div class="form-container">
            <h1 class="title">Create your Apple Account</h1>

            <!-- redirect to login.php -->
            <p class="subtext">Already have an Apple account? <a class="link-styling" href="<?php echo $link_to_login; ?>">Sign In</a></p>
            
            <form action="sign-up.php" method="post" class="register">
                <div class="half-field">
                    <input class="half space-margin" type="text" name="fname" placeholder="First Name" required>
                    <input class="half space-margin" type="text" name="lname" placeholder="Last Name" required>
                </div>
                <input class="full space-margin" type="text" name="username" placeholder="Username" required>
                <input class="full space-margin" type="number" name="phonenum" placeholder="Phone Number" required>
                <input class="full space-margin" type="email" name="email" placeholder="Email" required>
                <input class="full space-margin" type="password" name="password" placeholder="Password" required>
                <input class="full space-margin" type="password" name="confpassword" placeholder="Confirm Password" required>
                <button type="submit" name="signup">Continue</button>
            </form>
            
        </div>
    </section>
</body>
</html>