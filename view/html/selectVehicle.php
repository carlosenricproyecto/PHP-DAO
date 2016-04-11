<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("header.php");
require_once("showMessageWarnings.php");
require_once("showMessageSuccess.php");
require_once("loadDropDown.php");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/selectVehicle.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 
<h4>Select a Vehicle and press Submit </h4>
<form method="POST" action="<?php echo $_GLOBALS["re_path"]; ?>controller/editVehicle.php" >
    <div class="form-group">
        <label for="inDate">Vehicle</label>          
        <?php
        loadDropDown($garage->getVehicles(), "Brand", "selection", "Id_vehicle");
        ?>
    </div>
    <input type="submit" value="submit" class="btn btn-default"/>
</form>
    </div>