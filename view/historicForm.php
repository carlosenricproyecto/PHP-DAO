<?php
    require_once("loadDropDown.php");
    require_once("header.php");
    $garage=unserialize($_SESSION["garage"]);
 ?>
 <form action="../controller/generateHistoric.php" method="POST">
   Select a Vehicle to see the historic:
   <?php
   loadDropDown($garage->getVehicles(),"Plate","hisVehicle");
   ?>
   <br/>
   <input type="submit" name="submit" value="Select" />
</form>
