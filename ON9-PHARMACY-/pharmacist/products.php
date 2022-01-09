<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">


    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../css/pharmacist.css">

    <title>Pharmacist Database</title>
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
            <div class="button-group">
                <a href="addnew.php" class="btn btn-big">Add New Products</a>
            </div>


            <div class="content">

                <h2 class="page-title">PHARMACY DATABASE</h2>

                <table>
                    <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EXP.DATE</th>
                        <th>PRICE</th>
                        <th>DESCRIPTION</th>
                        <th>STOCK</th>

                        <th colspan="3">ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ethylchloride Spray 100ml</td>
                            <td>07/2023</td>
                            <td>MYR 23</td>
                            <td>Breacol Cough Syrup helps soothe sore irritated throats, loosens thick phlegm and relieves coughs.
                                Adult 15 years and above : 2 teaspoons. Children 6-14 years: 1-2 teaspoons.
                                Ingredients: Guaifenesin (Glyceryl Guaiacolate), Sodium Benzoate, Potassium Sorbate and Apricot-Menthol Flavour
                                Diagnostic interference: Guaiphenesin could interfere with the diagnosis of carcinoid syndrome.
                                If symptoms persist, consult the doctor.
                            </td>
                            <td>5</td>
                            <td><a href="#" class="edit">EDIT</a></td>
                            <td><a href="#" class="delete">DELETE</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Pa</td>
                            <td>Me</td>
                            <td>Me</td>
                            <td>Me</td>
                            <td>Me</td>
                            <td><a href="#" class="edit">EDIT</a></td>
                            <td><a href="#" class="delete">DELETE</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>

</body>

</html>