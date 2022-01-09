<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Your Profile</title>
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

    <div class="center3">
        <h1>Your Profile</h1>

        <form action="includes/profileupdate.php" method="post" class="login-form">

            <?php
            $currentUSer = $_SESSION['email'];
            $sql = "SELECT * FROM customer WHERE email = '$currentUSer' ";

            $gotResults = mysqli_query($conn, $sql);

            if ($gotResults) {
                if (mysqli_num_rows($gotResults) > 0) {
                    while ($row = mysqli_fetch_array($gotResults)) {
            ?>

                        <div class="grid-container">
                            <div class="txt_field">
                                <p>Full Name</p>
                                <input name="name" id="name" type="text" class="form-control" value="<?php echo $row['name']; ?>">

                            </div>


                            <div class="txt_field">
                                <p>Email</p>
                                <input name="email" id="email" type="text" class="form-control" value="<?php echo $row['email']; ?>">

                            </div>


                            <div class="txt_field">
                                <p>Username</p>
                                <input name="username" id="username" type="text" class="form-control" value="<?php echo $row['username']; ?>" readonly>

                            </div>

                            <div class="txt-field">
                                <p>Password</p>
                                <input name="password" id="password" type="password" class="form-control" value="<?php echo $row['password']; ?>">
                            </div>

                            <div class="txt_field">
                                <p>Phone Number</p>
                                <input name="phoneNo" id="phoneNo" type="text" class="form-control" value="<?php echo $row['phoneNo']; ?>">

                            </div>

                            <div class="txt_field">
                                <p>Address</p>
                                <input name="address" id="address" type="text" class="form-control" placeholder="Address" value="<?php echo $row['address']; ?>" class="resizedTextbox">

                            </div>
                            <?php
                            if (isset($_GET["error"])) {

                                if ($_GET["error"] == "invalidemail") {
                                    echo "<h3>Invalid email!<h3>";
                                } else if ($_GET["error"] == "none") {
                                    echo "<h3>Your profile succesfully updated .<h3>";
                                }
                            }
                            ?>
                            <div></div>
                            <div></div>
                            <input type="submit" id="submit" name="submit" value="Save Update">
                            <div></div>
                            </br>
                        </div>
        </form>
    </div>

<?php
                    }
                }
            }

?>

</body>

</html>