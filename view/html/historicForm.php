<?php
require_once("loadDropDown.php");
require_once("header.php");
$garage = new Garage("aux");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/historicForm.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
        <form action="<?php echo $_GLOBALS["re_path"]; ?>controller/generateHistoric.php" method="POST">
            Select a Vehicle to see the historic:
            <?php
            $garage->populateVehicles();
            loadDropDown($garage->getVehicles(), "Plate", "hisVehicle", "Id_vehicle");
            ?>
            <br/>
            <input type="submit" name="submit" value="Select" />
        </form>
    </div>
