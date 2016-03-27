<?php
require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");

session_start();
if (isset($_POST['submit'])){
    $mechanic = new Mechanic($_POST["name"],$_POST["salary"],$_POST["mechteam"]);
    $mechanic->persist();
    $success="<strong>The mechanic with name tal has been created</strong>";
}

require_once($_GLOBALS["in_path"]."view/html/mechanicForm.php");
 ?>
