<?php
require_once("header.php");
require_once("showMessageWarnings.php");
?>
  <div class="container">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="../controller/authController.php" method="POST">
      Login: <input type="text" name="login" <?php if (isset($_COOKIE["user"])){
        echo 'value="'.$_COOKIE["user"].'"';
      } ?>
      /><br/>
      Password: <input type="text" name="pass"/><br/>
      Remember user: <input type="checkbox" name="remember"/><br/>
      <input type="submit" value="Log in" name="submit"/>
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
</html>
