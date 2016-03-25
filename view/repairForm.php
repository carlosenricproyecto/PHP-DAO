<?php
require_once("loadDropDown.php");
require_once("header.php");
$garage= new Garage("aux");
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
        $garage->populateVehicles();
        loadDropDown($garage->getVehicles(),"Brand","repVehicle","Id_vehicle");
       ?>
      <br/>
      In Date: <input type="date" name="inDate" /><br/>
      Out Date: <input type="date" name="outDate" /><br/>
      Worked Hours: <input type="number" name="whours" /><br/>
      Mechanic Team:
      <?php
      $garage->populateMechTeams();
        loadDropDown($garage->getMechTeams(),"Name","repMechTeam","Id_mech_team");
       ?>
      <br/>
      Reparation type:
      <?php
      $garage->populateRepairTypes();
        loadDropDown($garage->getRepairTypes(),"Description","repType","Id_repair_type");
       ?>
       <br/>

      <input type="submit" value="Register Repair" name="submit"/>
  </body>

</html>
