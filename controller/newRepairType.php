<?php
require_once("function_AutoLoad.php");
require_once("ValidateRepairType.php");
session_start();

if (isset($_POST["submit"])){
    $reptype = new RepairType($_POST["description"],$_POST["cost"]);
    $reptype->persist();
    $success="<strong>Repair type has been registered</strong>";
}

require_once("../view/repairTypeForm.php");
 ?>
