<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");
session_start();

if (isset($_POST["submit"])){
    $reptype = new RepairType($_POST["description"],$_POST["cost"]);
    $reptype->persist();
    $success="<strong>Repair type has been registered</strong>";
}else{
    header("Location:".$_GLOBALS["re_path"]."view/html/repairTypeForm.php");
}

require_once($_GLOBALS["in_path"]."view/html/repairTypeForm.php");
 ?>
