<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pok-A-Dot Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div id="container">

        <?php $current=2; include "../components/banner_and_nav.php"; ?>

        <div id="contentpane">
            <!-- <div class="section">
                <h2>Email us</h2>
                <p class="indent">gopokadot@gmail.com</p>
            </div> -->
            <div class="section">
                <h2>Call us</h2>
                <p class="indent">857-488-6061</p>
            </div><!-- phone number section -->

            <div class="section">
                <h2>Email us</h2>
                <div class="indent">
                    <?php include "../components/contact_form.php" ?>
                </div>
            </div>

        </div><!-- content pane -->

    </div><!-- container -->

    <?php include "../components/globalscripts.php" ?>

    <script type="text/javascript" src="../js/form_fields.js"></script>

</body>
</html>