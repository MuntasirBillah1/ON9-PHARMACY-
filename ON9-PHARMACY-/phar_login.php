<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $password = md5($_POST['password']);

    $query = "SELECT * from pharmacist where email= '" . $email . "' AND password= '" . $password . "'";
    $result = mysqli_query($data, $query);
    $row = mysqli_fetch_array($result);

    echo '<script> alert("Incorrect email or password!")</script>';
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pharmacist Login</title>
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
        <h1>Pharmacist Login</h1>
        <form action="#" method="post" class="login-form">

            <div class="txt_field">
                <input name="email" id="email" type="text" class="form-control" placeholder="Email" value="">

            </div></br>

            <div class="txt_field">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password" value="">

            </div></br>

            <div class="txt_field">
                <a href="forgot-password.php">Forgot your password?</a>

            </div></br>

            <input type="submit" value="Login">
            </br></br>
        </form>
    </div>


    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>
</body>

</html>