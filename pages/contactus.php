<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POKADOT Contact Us</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/picture_popout.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/hamburger.css">

        <!-- Source: http://paperjs.org/tutorials/ ! -->

    <script src = "../js/mobileNav.js"></script>

</head>
<body>
    <div class="container">

         <?php $current=4; include "../components/banner_and_nav.php"; ?>

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
                <div class="col-md-12 col-sm-12">
                    <h1 class="indexHeader">Send us an email to get in touch!</h1>
                </div>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

        <!-- SECTION END -->

        <?php include "../components/footer.php" ?>

    </div><!-- container -->

    <?php include "../components/globalscripts.php" ?>
    <script type="text/javascript" src="../js/contact-ajax.js"></script>

</body>
</html>
