<?php
require_once("../model/autoload.php");
require_once("ValidateRepairType.php");
session_start();

if (isset($_POST["submit"])){
  if ($_POST["code"]!=null && $_POST["description"]!=null){

    $garage=unserialize($_SESSION["garage"]);
    if (ValidateRepairType($_POST["code"])===true){
      try{
        $garage->registerRepairType($_POST["code"],$_POST["description"]);
        $_SESSION["garage"]=serialize($garage);
        $_SESSION["message"]="The Repair type with code <strong>".$_POST["code"]."</strong> Was succesfully registered";
        header("Location:../view/showMessageSuccess.php");
      }catch(Exception $e){
        $_SESSION["error"]="There was a problem registering the Repair type, try again please";
      }
    }else{
      $_SESSION["warning"]=ValidateRepairType($_POST["code"]);
      header("Location:../view/repairTypeForm.php");
    }

  }else{
    $array=array();
    array_push($array,"All the fields are required");
    $_SESSION["warning"]=$array;
    header("Location:../view/repairTypeForm.php");
  }

}else{
  header("Location:../view/repairTypeForm.php");
}
 ?>
