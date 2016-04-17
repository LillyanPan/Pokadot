<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div id="container">
        
        <?php $current=0; include "components/banner_and_nav.php"; ?>

        <div id="contentpane">

            <div class="section">
                <div>
                    <h2 id="about-blurb">
                        We are a mobile art and pottery studio passionate about bringing the invigorating power of art and creativity to people of all ages anywhere!<br>We meet you where you are!
                    </h2>
                    <p class="line-after">
                        We are two ladies with a passion for art and a kiln. Leigh is a special educator who loves to connect through art on a personal level with both kids and adults. Cathy is an elementary art teacher who strives to bring learning out of the classroom for all ages of artists. Together, we are Pokadot!
                    </p>
                </div>
                <div>
                    <p id="show-full-letter">Read more &#x25BC;</p>
                </div>
                <div id="full-letter" class="indent">
                    <div class="section">
                        <p class="line-after">
                            Pokadot is a new art and lifestyle studio in west suburban Boston. For artists both young and old, we work with you to make your art or pottery painting project come to life. We work in collaboration with other art studios, assisted living facilities, scout troops, and family associations. We are also eager to help individuals plan private events. From birthday parties to bridal showers... whatever the vision, we will help with the planning and execution of your special event.
                        </p>
                        <p class="line-after">
                            Pokadot will bring our mobile studio to any space. Regardless of the range of projects, we provide all the materials, tables and chairs if necessary, and drop cloths. All we need from you is access to water. We provide fun and a sense of accomplishment for all of our artists. We can design a project to be completed in one hour or over the course of many weeks. We are fully insured and endlessly enthusiastic.
                        </p>
                        <p class="line-after">
                            The health benefits of engagement in creative activities are well documented. Let Pokadot help find appropriate projects for your group today.
                        </p>
                    </div>
                </div>
            </div><!-- section-->

            <div class="section">
                <div class="section">
                    <h4>Cathy</h4><br>
                    <div class="indent">
                        <p>
                            Cathy is a lifelong art educator. Both in and out of the classroom,
                            she has spent her adult life helping children and adults find paths for creative
                            expression. Educated at Middlebury College and the
                            Massachusetts College of Art, she brings her energy to the studio every day.
                        </p>
                    </div> <!-- cathy indent -->
                </div> <!-- cathy section -->
                <div class="section">
                    <h4>Leigh</h4><br>
                    <div class="indent">
                        <p>
                            A graduate of the responsive teacher program at the University of Vermont,
                            Leigh has spent many years preparing teaching environments 
                            and designing activities for fun, authentic, hands on learning 
                            with a focus on individualized instruction and positive interaction! 
                            Now she’s looking forward to bringing her creative energy to Pokadot mobile art studio and you!
                        </p>
                    </div><!-- leigh -->
                </div><!-- leigh section -->
            </div><!-- who we are section -->

        </div><!-- content pane -->

    </div><!-- container -->

    <?php include "components/globalscripts.php" ?>

    <script type="text/javascript" src="js/whoweare_control.js"></script>

</body>
</html>