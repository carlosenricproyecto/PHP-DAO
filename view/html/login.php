<?php
require_once("../../config/path.inc.php");
require_once($_GLOBALS["in_path"] . "view/html/header.php");
require_once($_GLOBALS["in_path"] . "view/html/showMessageWarnings.php");
?>
<?php if (!isset($_SESSION["islogged"])) {?>
<div class="container-fluid loginbody">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 loginbox">
            <form action="../../controller/authController.php" method="POST">
                <div class="form-group">
                    <label for="pass">Login</label>
                    <input type="text" name="login"  class="form-control" <?php
                    if (isset($_COOKIE["user"])) {
                        echo 'value="' . $_COOKIE["user"] . '"';
                    }
                    ?>
                </div>
                <br/>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input class="form-control" type="password" name="pass" id="pass" placeholder="pass" />
                </div>
                <div class="form-group">
                    <label for="pass">Remember user</label>
                    <input class="form-control" type="checkbox" name="remember" id="remember"/>
                </div>
                <input type="submit" value="Log in" class="btn btn-Primary" name="submit"/>
                <div class="g-recaptcha" data-sitekey="6Lcj8BsTAAAAAI0V2GgreAuO6hkUTVSDICMmzyp6">
                </div>
            </form>
        </div>
    </div>
    <?php if (isset($warnings)) { ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php showMessageWarnings($warnings); ?>

            </div></div>
    <?php } ?>
<?php } ?>
</html>
