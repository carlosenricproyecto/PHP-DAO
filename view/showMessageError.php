<?php
  require_once("header.php");
  $error=$_SESSION["error"];
?>
  <div class="alert alert-danger">
    <?php echo $error ?>
  </div>
