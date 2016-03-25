<?php

require_once("function_AutoLoad.php");
require_once("../view/header.php");


if (isset($_POST["submit"])) {
    $garage = new Garage("aux");
    $arrayList = $garage->getVehicleHistoric($_POST["hisVehicle"]);
    $titleList = "Historic vehicle";
}

require_once("../view/showList.php");
?>
