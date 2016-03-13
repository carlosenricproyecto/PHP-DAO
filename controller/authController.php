<?php
require_once("../model/autoload.php");
session_start();
$garage=unserialize($_SESSION["garage"]);
if (isset($_POST["submit"])){
    $user=$garage->searchUser($_POST["login"]);
    if ($user){
        if ($user->getPassword()== $_POST["pass"]){
          $_SESSION["login"]=$_POST["login"];
          $_SESSION["islogged"]=true;
          $_SESSION["warning"]=null;
          if (isset($_POST["remember"])){
                setCookie("user",$_POST["login"],time()+3600,"/");  
          }
          header("Location:../view/menu.php");
        }else{
          $array=array();
          array_push($array,"<strong>Incorrect Password</strong>");
          $_SESSION["warning"]=$array;
          header("Location:../view/login.php");
        }
    }else{
      $array=array();
      array_push($array,"<strong>This user does not exist</strong>");
      $_SESSION["warning"]=$array;
      header("Location:../view/login.php");
    }
}else{
  header("Location:../view/login.php");
}
 ?>
