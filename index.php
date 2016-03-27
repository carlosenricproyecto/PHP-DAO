<?php
session_start();
require_once("config/path.inc.php");
define("pathConf",$_GLOBALS["in_path"]);

require_once("controller/function_AutoLoad.php");

if (isset($_SESSION["islogged"])){
	header("Location: view/html/menu.php");
}else{
	header("Location: view/html/login.php");
}


?>
