<?php

    $warning = empty($_POST) ? "" : "Bad Login";

?>
            <form id="login-form" class="form" method="post" action="#">
                <p class="warning"><?php echo $warning ?></p>
                <input id="username" class="short-text soft-text" type="text" name="username" placeholder="Username" maxlength="20" required title="Please enter your username">
                <input id="password" class="short-text soft-text" type="password" name="password" placeholder="password" maxlength="20" required title="Please enter your password">
                <input type="submit" value="Log In">
            </form>