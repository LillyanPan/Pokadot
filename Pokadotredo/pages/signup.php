<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot About</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
     <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src = "../js/valid_forms.js"></script>

</head>
<body>
    <?php
        // Define location of Google API PHP files
        set_include_path(get_include_path() . PATH_SEPARATOR . '../google-api-php-client/src');
    ?>

    <script>
        // Set default color of select to gray 
        function changeColor(select) {
            document.getElementById(select.id).style.color = (select.value) ? "black" : "#A9A9A9";
        }
    </script>

    <div class="container">

        <?php $current=3; include "../components/banner_and_nav.php"; ?>

         <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->

        <!-- Display Workshop Sign Up Form --> 
        <div class="row">
            <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-6 col-sm-6">
                <?php include "../components/sign_up_form.php" ?>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1 class="indexHeader">Available Workshop Times!</h1>
                <?php include "../components/calendar.php" ?>
            </div>
        </div> 

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->    

        <?php include "../components/footer.php" ?>

    </div><!-- container -->

    <?php include "../components/globalscripts.php" ?>

</body>
</html>