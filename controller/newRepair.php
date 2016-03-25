<?php
require_once("function_AutoLoad.php");

session_start();

if (isset($_POST["submit"])){
    $repair = new Repair($_POST["repVehicle"],$_POST["inDate"],$_POST["outDate"],$_POST["whours"],$_POST["repMechTeam"],$_POST["repType"]);
    $repair->persist();
}


 ?>
