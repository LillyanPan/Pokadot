<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Pottery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
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
                <h1 class="indexHeader">Pottery Painting</h1>
                <ul>
                    <li>Open studio time or structured classes</li>
                    <li>Range of art materials</li>
                    <li>Variety of utilitarian and decorative bisqueware</li>
                    <li>Colorful palette of glazes</li>
                    <li>Inspired ideas and know how</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-3 col-xs-3"></div>
            <div class="col-md-6 col-xs-6 endSection"></div>
            <div class="col-md-3 col-xs-3"></div>
        </div>
        <!-- SECTION END -->

         <div class="row">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <h1 class="indexHeader">Pottery Painting - all ages</h1>
                <?php
                $studio_pictures = array( "../images/pottery1_small.jpg",
                                          "../images/pottery2_small.jpg",
                                          "../images/pottery3_small.jpg");
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