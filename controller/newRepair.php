<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");

//Deserialize garage, garage addRepair
session_start();

if (isset($_POST["submit"])){
    $repair = new Repair($_POST["repVehicle"],$_POST["inDate"],$_POST["outDate"],$_POST["whours"],$_POST["repMechTeam"],$_POST["repType"]);
    $repair->persist();
    $success="<strong>The Reparation of vehicle tal has been stored</strong>";
}

$garage = new Garage("aux");
$garage->populateVehicles();
$garage->populateMechTeams();
$garage->populateRepairTypes();

require_once($_GLOBALS["in_path"]."view/html/repairForm.php");

 ?>
