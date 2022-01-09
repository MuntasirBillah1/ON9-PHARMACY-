<?php
include 'includes/connect.php';
session_start();

if (isset($_POST["add"])) {

    $catogories = $_POST["catogories"];
    $NRIC_PP = $_POST["IC"];
    $Gender = $_POST["gender"];
    $Race = $_POST["Race"];
    $Results_ID = $_POST["Results_ID"];
    $Results_Date = $_POST["Date"];
    $Results_Time = $_POST["Time"];
    $Results_Status = $_POST["status"];

    $sql = "INSERT INTO tblresults (username, IC, Gender,Race, Results_ID, Results_Date,Results_Time,Results_Status)
    VALUES ('$username','$NRIC_PP','$Gender','$Race','$Results_ID','$Results_Date','$Results_Time','$Results_Status' )";

    $query = mysqli_query($data, $sql);

    if ($query) {
        echo '<script> alert("Results have been submitted!")</script>';
        header('location: results-lab.php');
    } else {
        echo '<script> alert("Submission not successful!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../css/pharmacist.css">

    <title>Add New Product</title>
</head>

<body>
    <!-- Header -->
    <?php include('includes/header2.php'); ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="products.php">List of Products</a></li>
                <li><a href="history.php">Purchased History</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->


        <!-- Admin Content -->
        <div class="admin-content">

            <div class="content">

                <h2 class="page-title">ADD NEW PRODUCTS</h2>

                <form action="" method="post">
                    <div>
                        <label>CATAGORIES</label>
                        <select name="topic" class="text-input">
                            <option value="Poetry">On-The-Counter Medicines</option>
                            <option value="Life Lessons">Supplements</option>
                        </select>
                    </div>

                    <div>
                        <label>NAME</label>
                        <input type="text" name="title" class="text-input">
                    </div>

                    <div>
                        <label>EXP.DATE</label>
                        <input type="text" name="expdate" class="text-input">
                    </div>

                    <div>
                        <label>PRICE</label>
                        <input type="text" name="price" class="text-input">
                    </div>

                    <div>
                        <label>DESCRIPTION</label></br>
                        <textarea name="description" id="body"></textarea>
                    </div>

                    <div>
                        <label>STOCK</label>
                        <input type="text" name="stock" class="text-input">
                    </div>

                    <div>
                        <label>IMAGE</label>
                        <input type="file" name="image" class="text-input">
                    </div>


                    <div>
                        <button type="submit" name="add" class="btn btn-big">Add</button>
                    </div>
                </form>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>

</body>

</html>