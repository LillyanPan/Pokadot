<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--Slider-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveSlides.js"></script>

    <!-- Source: http://paperjs.org/tutorials/ ! -->
<!--     <script type="text/javascript" src="js/paper-full.min.js"></script>
    <script type="text/paperscript" src="js/paperScript.js" canvas="canvas"></script>
 -->
</head>

<body>

    <!-- <canvas id="canvas" resize></canvas>  COMMENT OUT JS FOR NOW -->

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
        

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-10 col-xs-10 endSection final"></div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <!-- SECTION END -->
   
        <div class="row">
            <div class="col-md-2 col-xs-1"></div>
            <div class="col-md-8 col-xs-10">
                <h1 class="indexHeader"> We are a mobile art and pottery studio passionate about bringing the invigorating power of art and creativity to people of all ages anywhere!<br>We meet you where you are!</h1>
            </div>
            <div class="col-md-2 col-xs-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-sm-10 col-md-10">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p>
                        We are two ladies with a passion for art and a kiln. Leigh is a special educator who loves to connect through art on a personal level with both kids and adults. Cathy is an elementary art teacher who strives to bring learning out of the classroom for all ages of artists. Together, we are Pokadot!
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div>

        <!-- SECTION END -->
        <div class="row">
            <div class="col-md-3 col-xs-3"></div>
            <div class="col-md-6 col-xs-6 endSection"></div>
            <div class="col-md-3 col-xs-3"></div>
        </div>
        <!-- SECTION END -->

        <div class = "row">
            <div class="col-md-2 col-sm-1"></div>
            <div class="col-md-8 col-sm-10">
                <p>
                    Pokadot is a new art and lifestyle studio in west suburban Boston. For artists both young and old, we work with you to make your art or pottery painting project come to life. We work in collaboration with other art studios, assisted living facilities, scout troops, and family associations. We are also eager to help individuals plan private events. From birthday parties to bridal showers... whatever the vision, we will help with the planning and execution of your special event.
                </p>
                <p>
                    Pokadot will bring our mobile studio to any space. Regardless of the range of projects, we provide all the materials, tables and chairs if necessary, and drop cloths. All we need from you is access to water. We provide fun and a sense of accomplishment for all of our artists. We can design a project to be completed in one hour or over the course of many weeks. We are fully insured and endlessly enthusiastic.
                </p>
                <p>
                    The health benefits of engagement in creative activities are well documented. Let Pokadot help find appropriate projects for your group today.
                </p>
            </div>
            <div class="col-md-2 col-sm-1"></div> 
        </div>

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-3 col-xs-3"></div>
            <div class="col-md-6 col-xs-6 endSection"></div>
            <div class="col-md-3 col-xs-3"></div>
        </div>
        <!-- SECTION END -->

        <div class="row">
            <div class="col-md-12">
                <h1 class="indexHeader">Pokadot Team</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-0"></div>
            <div class="col-md-3 col-sm-12">
                <h2>Cathy</h2>
                <img src="images/Cathy.jpg" class="about_image" alt="Cathy">
                <p class="about_image_description">Cathy is a lifelong art educator. Both in and out of the classroom, she has spent her adult life helping children and adults find paths for creative expression. Educated at Middlebury College and the Massachusetts College of Art, she brings her energy to the studio every day.
                </p>
            </div>
            <div class="col-md-3 col-sm-12">
                <h2>Leigh</h2>
                <img src="images/Leigh.jpg" class="about_image" alt="Leigh">
                <p class="about_image_description">A graduate of the responsive teacher program at the University of Vermont, Leigh has spent many years preparing teaching environments and designing activities for fun, authentic, hands on learning with a focus on individualized instruction and positive interaction! Now she’s looking forward to bringing her creative energy to Pokadot mobile art studio and you!
                </p>
            </div>
            <div class="col-md-3 col-sm-0"></div>
        </div>

        <!-- SECTION END -->
         <div class="row">
            <div class="col-md-2 col-xs-3"></div>
            <div class="col-md-8 col-xs-6 endSection final"></div>
            <div class="col-md-2 col-xs-3"></div>
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

    </div>

    <?php include "components/globalscripts.php" ?>

    <script>

        $(function() {
            $(".rslides").responsiveSlides();
        });

    </script>

</body>
</html>