<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POKADOT Gifts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/hamburger.css">
    <script src = "../js/mobileNav.js"></script>

        <!-- Source: http://paperjs.org/tutorials/ ! -->

    <script type="text/javascript" src="../js/paper-full.min.js"></script>
    <script type="text/paperscript" src="../js/paperScript.js"></script>

</head>
<body>
1
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    ?>
2
    <?php include "../components/handle_image_add_delete.php"; ?>
3
    <div class="container">

        <?php $current=2; include "../components/banner_and_nav.php"; ?>

        <?php include "../components/picture_popout.php" ?>

         <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->

        <div class="row">
           <div class="col-md-3 col-sm-3"></div>
           <div class="col-md-6 col-sm-6">
                <h1 class="indexHeader">Personalized Gifts</h1>
                <div class="whatWeDoListContainer">
                    <ul class="whatWeDoList">
                        <li>Weddings</li>
                        <li>Anniversaries</li>
                        <li>Birthdays</li>
                        <li>Teacher's Gifts</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

        <div class="row">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <?php
                    $group_name = "gifts";
                    include "../components/studiopictures.php";
                ?>
            </div>
            <div class="col-md-2 col-sm-1"></div>
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
    <script type="text/javascript" src="../js/picture_popout.js"></script>

</body>
</html>
