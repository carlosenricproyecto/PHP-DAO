<?php
require_once("../model/autoload.php");
require_once("loadDropDown.php");
require_once("header.php");
require_once("showMessageWarnings.php");
$garage=unserialize($_SESSION["garage"]);
?>

<html>

  <head>
    <meta charset="utf-8" />
    <style type="text/css"></style>
  </head>

  <body>
    <form action="../controller/newMechanic.php" method="POST">
      Operator Number: <input type="number" name="opNumber" /><br/>
      Name: <input type="text" name="name" /><br/>
      Mechanic Team:
<?php
  loadDropDown($garage->getMechTeams(),"Name","mechTeamName");
 ?>

      <input type="submit" value="Register Mechanic" name="submit"/>

      <?php
        if (isset($_SESSION["warning"])){
          showMessageWarnings($_SESSION["warning"]);
        }
       ?>

  </body>

</html>
