<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Workshops</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div id="container">

        <?php $current=1; include "../components/banner_and_nav.php"; ?>

        <?php include "../components/picture_popout.php" ?>

        <div id="contentpane">
            <div class="section">
                <h2>Workshops and Classes</h2>
                <!-- <p>We have the ideas and know how to help you make room for creativity in your life.</p> -->
                <ul class="indent">
                    <li>Open studio time or structured classes</li>
                    <li>Range of art materials</li>
                    <li>Variety of utilitarian and decorative bisqueware</li>
                    <li>Colorful palette of glazes</li>
                    <li>Inspired ideas and know how</li>
                </ul>
                <!-- <p>With as much or as little assistance as you would like, the possibilities are endless.</p> -->
            </div>
            <div class="section">
                <div class="section">
                    <h4>Pottery Painting - all ages</h4>
                    <?php
                        $studio_pictures = array( "../images/pottery1_small.jpg",
                                                  "../images/pottery2_small.jpg",
                                                  "../images/pottery3_small.jpg");
                        include "../components/studiopictures.php";
                    ?>
                </div>
                <div class="section">
                    <h4><span class="dot red"></span> Art - 1 year olds and up</h4>
                    <?php
                        $studio_pictures = array( "../images/artdabblers1_small.jpg",
                                                  "../images/artdabblers2_small.jpg",
                                                  "../images/artdabblers3_small.jpg");
                        include "../components/studiopictures.php";
                    ?>
                </div>
                <div class="section">
                    <h4><span class="dot yellow"></span> Art - 3 year olds and up</h4>
                    <?php
                        $studio_pictures = array( "../images/artexplorers1_small.jpg",
                                                  "../images/artexplorers2_small.jpg",
                                                  "../images/artexplorers3_small.jpg");
                        include "../components/studiopictures.php";
                    ?>
                </div>
                <div class="section">
                    <h4><span class="dot blue"></span> Art - 5 to 105 years old</h4>
                    <?php
                        $studio_pictures = array( "../images/artkidtechs1_small.jpg",
                                                  "../images/artkidtechs2_small.jpg",
                                                  "../images/artkidtechs3_small.jpg");
                        include "../components/studiopictures.php";
                    ?>
                </div>
            </div><!-- workshops and classes section -->

        </div><!-- content pane -->

    </div><!-- container -->

    <?php include "../components/globalscripts.php" ?>

    <script type="text/javascript" src="../js/picture_popout.js"></script>

</body>
</html>