<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");

session_start();
$warnings = array();
$garage =new Garage("aux");
$garage->populateVehicles();
$garage->populateGasTypes();

if (isset($_POST["selection"])){
    $selection = $garage->searchVehicle($_POST["selection"]);
    if ($selection){
        require_once($_GLOBALS["in_path"]."view/html/vehicleForm.php");
    }else{
        echo "<h1>nope</h1>";
    }
    
}else{
    if (isset($_POST["submit"])){
        $vehicle = new Vehicle($_POST["id"],$_POST["plate"], $_POST["brand"], $_POST["model"], $_POST["type"], $_POST["nif"], $_POST['name'], $_POST['surname']);
        $vehicle->persist();
        $success = "<strong> The vehicle with plate tal has been updated</strong>";
    }
    require_once($_GLOBALS["in_path"]."view/html/selectVehicle.php");
}


?>

