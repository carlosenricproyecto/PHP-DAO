<?php
require_once("function_AutoLoad.php");
$warnings = array();
session_start();
if (isset($_POST["submit"])){
    $visitant = new User($_POST["login"],$_POST["pass"]);
    if ($visitant->exists()){
        if ($visitant->validateUser()){
            header("Location:../view/menu.php");
            $_SESSION["user"]=$visitant->getLogin();
            $_SESSION["isadmin"]=$visitant->getPassword();
            $_SESSION["islogged"]=true;
        }else{
            array_push($warnings,"<strong>Password not valid</strong>");
        }
    }else{
         array_push($warnings,"<strong>User not found</strong>");
    }
}else{
    array_push($warnings,"<strong>User not found</strong>");
}

require_once("../view/login.php");
 ?>
