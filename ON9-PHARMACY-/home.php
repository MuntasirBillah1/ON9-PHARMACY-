<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/A.css">
  <style>
    body {
      background-image: url('home.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>

<body>

	<!-- Header -->
	<?php include('includes/header.php'); ?>


  <div class="text">
    <h1>EASY AND</h1>
    <h1>CONVENIENT<h1>
        <button class="button">SHOP NOW</button>
  </div>


</body>

</html>