<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Events</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
     <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
    <div class="container">

        <?php $current=1; include "../components/banner_and_nav.php"; ?>

         <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->

        <?php include "../components/picture_popout.php" ?>

        <div class="row">
           <div class="col-md-3 col-sm-3"></div>
           <div class="col-md-6 col-sm-6">
                <h1 class="indexHeader">Parties and Events</h1>
                <ul>
                    <li>Birthday Parties for kids and adults</li>
                    <li>Bridal Showers and Bachelorette Parties</li>
                    <li>Parents’ Night Out</li>
                    <li>Playgroup Outings</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

          <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->

        <div class="row">
            <div class="col-md-3 col-xs-3"></div>
             <div class="col-md-6 col-xs-6">
                <div class="cod-md-12">
                    <p class="footer">gopokadot@gmail.com</p>
                </div> 
             </div>
            <div class="col-md-3 col-xs-3"></div>
        </div>

</div><!-- container -->

    <?php include "../components/globalscripts.php" ?>

</body>
</html>