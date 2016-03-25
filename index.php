<?php
session_start();

require_once("controller/function_AutoLoad.php");

if (isset($_SESSION["islogged"])){
	header("Location: view/menu.php");
}else{
	header("Location: view/login.php");
}


?>
