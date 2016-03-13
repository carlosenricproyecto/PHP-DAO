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
      Code <input type="number" name="code"/><br>
      Description <input type="text" name="description"/><br>
      <input type="submit" value="New Repair Type" name="submit"/>
    </form>
  </body>
</html>

<?php
  if (isset($_SESSION["warning"])){
    showMessageWarnings($_SESSION["warning"]);
  }
 ?>
