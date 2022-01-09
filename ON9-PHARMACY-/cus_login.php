<?php
session_start();

if (isset($_SESSION["email"]) && $_SESSION["email"] === true) {
    header("location: home.php");
    exit;
}

require_once "includes/config.php";

$email = $password = "";
$email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, email, password FROM customer WHERE email = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["email"] = true;
                            $_SESSION["email"] = $email;

                            header("location: home.php");
                        } else {
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    $email_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Customer's Login</title>
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

    <div class="center">
        <h1>Customer's Login</h1>
        <form action="" method="post" class="login-form">

            <div class="txt_field">
                <input name="email" id="email" type="text" class="form-control" placeholder="Email" required="">

            </div></br>

            <div class="txt_field">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">

            </div></br>

            <input type="submit" value="Login">
            <div class="register_link">
                </br>
                <p>Don't have an account? <a href="cus_register.php">Register Here</a>.</p>
            </div></br></br>
        </form>
    </div>


</body>

</html>