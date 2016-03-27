<?php
session_start();
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");
$warnings = array();

if (isset($_POST["submit"])){
    $visitant = new User($_POST["login"],$_POST["pass"]);
    if ($visitant->exists()){
        if ($visitant->validateUser()){
            $visitant->populate();
            $_SESSION["user"]=$visitant->getLogin();
            $_SESSION["isadmin"]=$visitant->isAdmin();
            $_SESSION["islogged"]=true;
            header("Location:".$_GLOBALS["re_path"]."view/html/menu.php");
            exit();
        }else{
            array_push($warnings,"<strong>Password not valid</strong>");
        }
    }else{
         array_push($warnings,"<strong>User not found</strong>");
    }
}else{
    array_push($warnings,"<strong>User not found</strong>");
}

require_once("../view/html/login.php");
 ?>
