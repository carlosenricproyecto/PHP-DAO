<?php
function ValidateRepairType($code){
  $res=true;
  $array=array();
  session_start();
  $garage=unserialize($_SESSION["garage"]);
  if ($garage->searchRepairType($code)!=null){
    $res="The Reparation type with code  <strong>".$code."</strong> already exists";
    array_push($array,$res);
  }
  if ($res===true){
      return $res;
  }else{
    return $array;
  }

}
 ?>
