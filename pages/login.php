<?php session_start(); 

    if (!empty($_POST) && isset($_POST['logout-submit'])) {
        $_SESSION = array();
        header("Refresh:0");
        exit();
    }
    else if (!empty($_POST) && isset($_POST['login-submit'])) {
        // use email filter because it has a stricter set of legal characters
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_EMAIL);
        $valid = $username && $password && strlen($username) <= 20 && strlen($password) <= 20;
        if ($valid) {
            require_once "../config.php";
            require_once "../password.php";
            $pdo = new PDO("mysql: host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
            $stmt = $pdo->prepare("SELECT password_hash FROM users WHERE username=:username");
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            $row = $stmt->fetch();
            if (!empty($row) && password_verify($password, $row["password_hash"])) {
                $_SESSION['user'] = $username;
                header("Location: ../index.php");
                exit();
            }
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POKADOT Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/picture_popout.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
    <div class="container">

         <?php $current=5; include "../components/banner_and_nav.php"; ?>

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
                <?php include "../components/login_form.php" ?>
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

        <?php include "../components/footer.php" ?>

    </div><!-- container -->

    <?php include "../components/globalscripts.php" ?>

</body>
</html>