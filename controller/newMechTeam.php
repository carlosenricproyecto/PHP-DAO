<?php
require_once("../model/autoload.php");

session_start();

if (isset($_POST["submit"])){
  $garage=unserialize($_SESSION["garage"]);
  try{
    $garage->registerMechTeam($_POST["name"]);
    $_SESSION["garage"]=serialize($garage);
    $_SESSION["message"]="The Mechanic team <strong>".$_POST["name"]." has been succesfully registered";
    header("Location:../view/showMessageSuccess.php");
  }catch (Exception $e){
    $_SESSION["error"]="There was a problem registering the mechanic team, try again please <br/>";
    header("Location:../view/showMessageError.php");
  }

}else{
  header("Location:../view/mechanicForm.php");
}
 ?>
