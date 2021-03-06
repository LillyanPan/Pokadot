<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POKADOT Events</title>
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

    <?php include "../components/handle_image_add_delete.php"; ?>

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
                <h1 class="indexHeader">Parties and Events</h1>
                <div class="whatWeDoListContainer">
                    <ul class="whatWeDoList">
                        <li>Birthday Parties for kids and adults</li>
                        <li>Bridal Showers and Bachelorette Parties</li>
                        <li>Parents’ Night Out</li>
                        <li>Playgroup Outings</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

        <div class="row">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <?php
                    $group_name = "events";
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
