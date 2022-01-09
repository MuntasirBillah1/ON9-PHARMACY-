<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Customer's Register</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/A.css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

    body {
        background-image: url('home.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body id="top">

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <div class="center2">
        <h1>Customer's Register</h1>
        <?php
                if (isset($_GET["error"])) {

                    if ($_GET["error"] == "invalidusername") {
                        echo "<h3>Invalid username!<h3>";
                    } else if ($_GET["error"] == "invalidemail") {
                        echo "<h3>Invalid email!<h3>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<h3>Something went wrong, please try again!<h3>";
                    } else if ($_GET["error"] == "usernametaken") {
                        echo "<h3>Username or email already taken!<h3>";
                    } else if ($_GET["error"] == "none") {
                        echo "<h3>Your account has been registered succesfully.<h3>";
                    }
                }
                ?>
        <form action="includes/register.inc.php" method="post" class="login-form">

            <div class="grid-container">
                <div class="txt_field">
                    <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" required="">
                    <span id="user-availability-status" style="font-size:12px;"></span>

                </div>


                <div class="txt_field">
                    <input name="email" id="email" type="text" class="form-control" placeholder="Email" onBlur="checkAvailability()" required="" >
                    

                </div>


                <div class="txt_field">
                    <input name="username" id="username" type="text" class="form-control" placeholder="Username" required="">
                    

                </div>

                <div class="txt_field">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
                    

                </div>

                <div class="txt_field">
                    <input name="phoneNo" id="phoneNo" type="text" class="form-control" placeholder="Phone Number" required="">
                    

                </div>

                <div class="txt_field">
                    <input name="address" id="address" type="text" class="form-control" placeholder="Address" required="">
                </div>


               
                <input type="submit" id="submit" name="submit" value="Register">
                
                <div class="login_link">
                    <p>Already have account? <a href="cus_login.php">Login Here</a>.</p>
                </div><br>
            </div>
        </form>
    </div>

</body>

</html>