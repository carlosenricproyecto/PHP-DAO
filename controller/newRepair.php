<?php
require_once("../model/autoload.php");

session_start();

if (isset($_POST["submit"])){
  if ($_POST)
  $garage=unserialize($_SESSION["garage"]);
  try{
    $garage->registerRepair($_POST["repVehicle"],$_POST["inDate"],$_POST["outDate"],$_POST["whours"],$_POST["repMechTeam"],$_POST["repType"]);
    $_SESSION["garage"]=serialize($garage);
    $_SESSION["message"]="The reparation for vehicle <strong>".$_POST["repVehicle"]."</strong> was succesfully registered with the In Date <strong>".$_POST["inDate"]."</strong>";
    header("Location:../view/showMessageSuccess.php");
  }catch(Exception $e){
    $_SESSION["error"]="There was a problem registering the reparation, try again please";
  }

}else{
  header("Location:../view/registerRepairType.php");
}
 ?>
