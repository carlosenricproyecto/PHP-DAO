<?php
function validateVehicle($plate){
  $res=true;
  $array=array();
  session_start();
  $garage=unserialize($_SESSION["garage"]);
  if ($garage->searchVehicle($plate)!=null){
    $res="El vehicle <strong>".$plate."</strong> ja existeix";
    array_push($array,$res);
  }
  if ($res===true){
    return $res;
  }else{
    return $array;
  }
}
 ?>
