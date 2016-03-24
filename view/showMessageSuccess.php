<?php
  require_once("header.php");
  $message=$_SESSION["message"];
?>
  <div class="alert alert-success">
    <?php echo $message ?>
  </div>
