<?php
require_once("function_AutoLoad.php");

session_start();

if (isset($_POST["submit"])){
    $mechteam = new MechTeam($_POST["name"],$_POST["category"]);
    $mechteam->persist();
    $success="<strong>The mechteam with name tal has been registered</strong>";
}

require_once("../view/mechTeamForm.php");
 ?>
