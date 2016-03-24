<?php
require_once("../model/autoload.php");
session_start();

$garage=unserialize($_SESSION["garage"]);
$object=$_REQUEST["object"];

switch($object){

  case "Vehicles":
    $array=$garage->getVehicles();
  break;
  case "Mechanic Teams":
    $array=$garage->getMechTeams();
  break;
  case "Reparations":
    $array=$garage->getRepairs();
  break;
  case "Repair Types":
    $array=$garage->getRepairTypes();
  break;
}

$_SESSION["list"]=$array;
$_SESSION["title"]=$object;

if (count($_SESSION["list"])>0){
  header("Location:../view/showList.php");
}else{
  $_SESSION["error"]="There are no registers of ".$object;
  header("Location:../view/showMessageError.php");
}

 ?>
