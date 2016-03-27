<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");


if (isset($_POST["submit"])) {
    $garage = new Garage("aux");
    $arrayList = $garage->getVehicleHistoric($_POST["hisVehicle"]);
    $titleList = "Historic vehicle";
}

require_once($_GLOBALS["in_path"]."view/html/showList.php");
?>
