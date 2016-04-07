<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");

session_start();

if (isset($_POST["submit"])){
    $mechteam = new MechTeam($_POST["name"],$_POST["category"]);
    $mechteam->persist();
    $success="<strong>The mechteam with name tal has been registered</strong>";
}else{
    header("Location:".$_GLOBALS["re_path"]."view/html/mechTeamForm.php");
}

require_once($_GLOBALS["in_path"]."view/html/mechTeamForm.php");
 ?>
