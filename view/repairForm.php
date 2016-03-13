<?php
require_once("../model/autoload.php");
require_once("loadDropDown.php");
require_once("header.php");
$garage=unserialize($_SESSION["garage"]);
?>
<html>

  <head>
    <meta charset="utf-8" />
    <style type="text/css"></style>
  </head>

  <body>
    <form action="../controller/newRepair.php" method="POST">
      Vehicle:
      <?php
        loadDropDown($garage->getVehicles(),"Brand","repVehicle");
       ?>
      <br/>
      In Date: <input type="date" name="inDate" /><br/>
      Out Date: <input type="date" name="outDate" /><br/>
      Worked Hours: <input type="number" name="whours" /><br/>
      Mechanic Team:
      <?php
        loadDropDown($garage->getMechTeams(),"Name","repMechTeam");
       ?>
      <br/>
      Reparation type:
      <?php
        loadDropDown($garage->getRepairTypes(),"Code","repType");
       ?>
       <br/>

      <input type="submit" value="Register Repair" name="submit"/>
  </body>

</html>
