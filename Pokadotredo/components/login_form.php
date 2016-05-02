<?php
    
    /*
    In this file, we will include form validation for the login form 
    using regexes. We will also prevent code injection by stripping
    HTML tags and elements. We will provide feedback to the users if
    their entries include invalid inputs. 
    */

    $warning = empty($_POST) ? "" : "Bad Login";
    echo "\n";
    if (empty($_SESSION['user'])) {
?>
                <h1 class="indexHeader">Log In</h1>
                <form id="login-form" class="form" method="post" action="#">
                    <p class="warning"><?php echo $warning ?></p>
                    <input id="username" class="short-text soft-text" type="text" name="username" placeholder="Username" maxlength="20" required title="Please enter your username">
                    <input id="password" class="short-text soft-text" type="password" name="password" placeholder="password" maxlength="20" required title="Please enter your password">
                    <input type="submit" value="Log In" name="login-submit">
                </form>
<?php 
    } else {
?>
                <h1 class="indexHeader">Log Out</h1>
                <form id="logout-form" class="form" method="post" action="#">
                    <input type="submit" value="Log Out" name="logout-submit">
                </form> 
<?php } ?>