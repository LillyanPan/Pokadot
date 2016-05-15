<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/hamburger.css">


    <!--Slider-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveSlides.js"></script>
    <script src = "js/mobileNav.js"></script>

    <!-- Source: http://paperjs.org/tutorials/ ! -->

    <script type="text/javascript" src="js/paper-full.min.js"></script>
    <script type="text/paperscript" src="js/paperScript.js"></script>
</head>

<body>
<canvas id="null"></canvas>
    <div class="container">
        <?php $current=0; include "components/banner_and_nav.php"; ?>

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->


        <!-- SLIDER ... credit: http://responsiveslides.com/ -->
        <ul class="rslides">
            <li><img src="images/slider1.jpg" alt="slider1"></li>
            <li><img src="images/slider2.jpg" alt="slider2"></li>
            <li><img src="images/slider3.jpg" alt="slider3"></li>
            <li><img src="images/slider4.jpg" alt="slider4"></li>
        </ul>
        
        <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10">
                <h1 class="indexHeader"> We are a mobile art and pottery studio</h1>
                <p class="ptSans" id = "homePageParagraph">We are passionate about bringing the invigorating power of art and creativity to people of all ages anywhere! We meet you where you are!</p>
            </div>
            <div class="col-md-1 col-xs-1"></div>
        </div>

       <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->

<!--         <div class="row">
            <div class="col-md-3 col-xs-3"></div>
             <div class="col-md-6 col-xs-6">
                <div class="cod-md-12">
                    <a class="signup-button" href="pages/signup.php" class="button">Sign up for a workshop!</a>
                    <p class="footer">gopokadot@gmail.com</p>
                </div> 
             </div>
            <div class="col-md-3 col-xs-3"></div>
        </div> -->

    </div>
    <?php include "components/footer.php" ?>
    <?php include "components/globalscripts.php" ?>

    <script>

        $(function() {
            $(".rslides").responsiveSlides();
        });

    </script>
</body>
</html>