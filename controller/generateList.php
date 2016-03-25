<?php
require_once("function_AutoLoad.php");
session_start();

$garage= new Garage("aux");
$object=$_REQUEST["object"];

switch($object){

  case "Vehicles":
    $garage->populateVehicles();
    $array=$garage->getVehicles();
  break;
  case "Mechanic Teams":
    $garage->populateMechTeams();
    $array=$garage->getMechTeams();
  break;
  case "Reparations":
    $garage->populateRepairs();
    $array=$garage->getRepairs();
  break;
  case "Repair Types":
    $garage->populateRepairTypes();
    $array=$garage->getRepairTypes();
  break;
}

$arrayList=$array;
$titleList=$object;

require_once("../view/showList.php");

 ?>
