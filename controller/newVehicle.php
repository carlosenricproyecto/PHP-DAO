<?php
  require_once("../model/autoload.php");
  require_once("ValidateVehicle.php");

  session_start();

  if (isset($_POST["submit"])){
    if ($_POST["plate"]!=null && $_POST["brand"] !=null && $_POST["model"] !=null && $_POST["type"] !=null && $_POST["nif"] !=null && $_POST["name"] !=null && $_POST["surname"]!=null){

        $garage=unserialize($_SESSION["garage"]);
        if (ValidateVehicle($_POST["plate"])===true){

            try{
                $garage->registerVehicle($_POST["plate"],$_POST["brand"],$_POST["model"],$_POST["type"],$_POST["nif"],$_POST['name'],$_POST['surname']);
                $_SESSION["garage"]=serialize($garage);
                $_SESSION["message"]="The Vehicle With plate <strong>".$_POST["plate"]."</strong> and model <strong>".$_POST["model"]."</strong> Was succesfully registered";
                header("Location:../view/showMessageSuccess.php");
            }catch(Exception $e){
                $_SESSION["error"]="There was a problem registering the vehicle, try again please";
                header("Location:../view/showMessageError.php");
            }

        }else{
          $_SESSION["warning"]=ValidateVehicle($_POST["plate"]);
          header("Location:../view/vehicleForm.php");
        }

  }else{
    $array=array();
    array_push($array,"All the fields are required");
    $_SESSION["warning"]=$array;
    header("Location:../view/vehicleForm.php");
  }
 }else{
  header("Location:../view/vehicleForm..php");
 }
?>
