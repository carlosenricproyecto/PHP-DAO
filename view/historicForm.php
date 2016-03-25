<?php
    require_once("loadDropDown.php");
    require_once("header.php");
    $garage= new Garage("aux");
 ?>
 <form action="../controller/generateHistoric.php" method="POST">
   Select a Vehicle to see the historic:
   <?php
   $garage->populateVehicles();
   loadDropDown($garage->getVehicles(),"Plate","hisVehicle","Id_vehicle");
   ?>
   <br/>
   <input type="submit" name="submit" value="Select" />
</form>
