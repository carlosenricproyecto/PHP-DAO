<?php
require_once("../model/autoload.php");
require_once("ValidateMechanic.php");

session_start();
if (isset($_POST['submit'])){
    $garage=unserialize($_SESSION["garage"]);
    if (validateMechanic($_POST["opNumber"])===true){
      try{
        $garage->registerMechanic($_POST["opNumber"],$_POST["name"],$_POST["mechTeamName"]);
        $_SESSION["garage"]=serialize($garage);
        $_SESSION["message"]="The Mechanic with Operator Number <strong>".$_POST["opNumber"]." has been successfully registered";
        header("Location:../view/showMessageSuccess.php");
      }catch (Exception $e){
        showMessage($e->getMessage());
      }
    }else{
      $_SESSION["warning"]=validateMechanic($_POST["opNumber"]);
      header("Location:../view/mechanicForm.php");
    }



}else{
  header("Location:../view/mechanicForm.php");
}
 ?>
