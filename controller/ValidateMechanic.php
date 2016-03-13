<?php
function validateMechanic($opnumber){
  $res=true;
  $array=array();

  $garage=unserialize($_SESSION["garage"]);
  if ($garage->searchMechanic($opnumber)!=null){
    $res="The Mechanic with operator number  <strong>".$opnumber."</strong> already exists";
    array_push($array,$res);
  }
  if ($res===true){
      return $res;
  }else{
    return $array;
  }

}
 ?>
