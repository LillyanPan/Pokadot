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
                <h1 class="indexHeader">Sign Up For a Workshop!</h1>
                <h3 id='signup-error-message' class='subtitle'></h3>
                <?php include "../components/sign_up_form.php" ?>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div>

        <!-- The below code displays the Available Workshop Times calendar. 
             Currently, it is commented out because users are simply signing
             up for time slots, so the calendar is unnecessary. However, we 
             have left this code here as requested by the client in case she
             wants to display specific workshops on the calendar in the future.
         -->

<!--     
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-6 col-sm-6">
                <h1 class="indexHeader">Available Workshop Times!</h1>
                <?php include "../components/calendar.php" ?>
            </div>
            <div class="col-md-3 col-sm-3"></div>
        </div> 
-->

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