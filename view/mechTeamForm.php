<?php
  require_once("header.php");
 ?>
<html>

  <head>
    <meta charset="utf-8" />
    <style type="text/css"></style>
  </head>

  <body>
    <form action="../controller/newMechTeam.php" method="POST">
      Team name: <input type="text" name="name" /><br/>
      Category: <input type="text" name="category"/><br/>
      <input type="submit" value="Register Mechanic Team" name="submit"/>
  </body>

  <?php require_once("feedbackMessages.php");?>
</html>
