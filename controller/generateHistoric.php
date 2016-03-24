<?php
    require_once("../model/autoload.php");
    require_once("../view/header.php");
    require_once("../view/loadDropDown.php");
    $garage=unserialize($_SESSION["garage"]);
if (isset($_POST["submit"])){
    $repairs=$garage->getRepairs();
    $array=array();
      for ($i=0; $i < count($repairs);$i++){
        if ($repairs[$i]->getVehicle()->getPlate()==$_POST["hisVehicle"]){
          array_push($array,$repairs[$i]);
        }
      }
      if (count($array) > 0){
          $_SESSION["list"]=$array;
          $_SESSION["title"]="Historic";
          header("Location:../view/showList.php");
      }else{
        $_SESSION["error"]= "There is no reparation data for the vehicle <strong>".$_POST["hisVehicle"]."</strong>";
        header("Location:../view/showMessageError.php");
      }
}else{
  header("Location:../view/historicForm.php");
}
 ?>
