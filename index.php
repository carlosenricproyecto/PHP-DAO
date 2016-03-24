<?php
session_start();

require_once("controller/function_AutoLoad.php");

if(!isset($_SESSION['garage'])){
	$garage=new Garage("Dr. Sayos Garage");
	$garage->populate();
	$_SESSION['garage']=serialize($garage);
}else {
	$garage= unserialize($_SESSION['garage']);
}

if (isset($_SESSION["islogged"])){
	header("Location: view/menu.php");
}else{
	header("Location: view/login.php");
}


?>
