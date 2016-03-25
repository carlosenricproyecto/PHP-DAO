<?php
  require_once("header.php");
  require_once("showMessageWarnings.php");
?>

<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <form method="POST" action="../controller/newRepairType.php">
      Description <input type="text" name="description"/><br>
      Cost <input type="text" name="cost"/><br>
      <input type="submit" value="New Repair Type" name="submit"/>
    </form>
  </body>
</html>

<?php
require_once("feedbackMessages.php");
 ?>
