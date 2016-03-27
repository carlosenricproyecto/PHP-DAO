<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");

session_start();

if (isset($_POST["submit"])){
    $repair = new Repair($_POST["repVehicle"],$_POST["inDate"],$_POST["outDate"],$_POST["whours"],$_POST["repMechTeam"],$_POST["repType"]);
    $repair->persist();
    $success="<strong>The Reparation of vehicle tal has been stored</strong>";
}

require_once($_GLOBALS["in_path"]."view/html/repairForm.php");

 ?>
