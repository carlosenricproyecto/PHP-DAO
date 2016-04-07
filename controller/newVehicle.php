<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");

session_start();
$warnings = array();

if (isset($_POST["submit"])) {
    $vehicle = new Vehicle($_POST["plate"], $_POST["brand"], $_POST["model"], $_POST["type"], $_POST["nif"], $_POST['name'], $_POST['surname']);
    if (!$vehicle->exists()) {
        $vehicle->persist();
        $success = "<strong> The vehicle with plate tal has been registered</strong>";
    } else {
        array_push($warnings, "<strong> The vehicle with plate tal already exists</strong>");
    }
}

$garage = new Garage("aux");
$garage->populateGasTypes();


require_once($_GLOBALS["in_path"]."view/html/vehicleForm.php");
?>
