<?php
require_once("function_AutoLoad.php");
require_once("ValidateMechanic.php");

session_start();
if (isset($_POST['submit'])){
    $mechanic = new Mechanic($_POST["name"],$_POST["salary"],$_POST["mechteam"]);
    $mechanic->persist();
    $success="<strong>The mechanic with name tal has been created</strong>";
}

require_once("../view/mechanicForm.php");
 ?>
