<?php
  function accessController(){
    $res=true;
    $url =  $_SERVER['SCRIPT_NAME'];
    if (strpos($url,"/login.php")===false && $_SESSION["islogged"]!=true){
      $array=array();
      array_push($array,"<strong>YOU SHOULDN'T BE DOING THESE THINGS ¬.¬</strong>");
      $_SESSION["warning"]=$array;
      $res=false;
    }
    return $res;
  }
?>
