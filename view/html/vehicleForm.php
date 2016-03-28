<?php
if (!isset($_GLOBALS["check_path"])) require_once("../../config/path.inc.php");
require_once($_GLOBALS["in_path"]."controller/function_AutoLoad.php");
require_once("header.php");
require_once("showMessageWarnings.php");
require_once("showMessageSuccess.php");
require_once("loadDropDown.php");
$garage = new Garage("aux");
?>
<script src="../js/validateVehicle.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="POST" action="../../controller/newVehicle.php" id="form">
        <?php require_once("feedbackMessages.php"); ?>
        <h4>
            Vehicle Info
        </h4>
            <div class="form-group">
                <label for="plate">Plate</label>
                <input class="form-control" type="text" name="plate" id="plate" placeholder="plate" />
                <div class="alert alert-danger error" id="plate_errorAN">Only letters and digits for plate</div>
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input class="form-control" type="text" name="brand" id="brand" placeholder="brand" />
                <div class="alert alert-danger error" id="brand_errorAN">Only letters and digits for brand</div>
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input class="form-control" type="text" name="model" id="model" placeholder="model" />
                <div class="alert alert-danger error" id="model_errorAN">Only letters and digits for model</div>
            </div>
            <div class="form-group">
                <label for="type">GAS TYPE</label>
                <?php
                $garage->populateGasTypes();
                loadDropDown($garage->getGasTypes(), "Description", "type", "Id_gas");
                ?>
            </div>
        <h4>
            Owner Info
        </h4>
            <div class="form-group">
                <label for="nif">NIF</label>
                <input class="form-control" type="text" name="nif" id="nif" placeholder="nif" />
                <div class="alert alert-danger error" id="nif_errorAL">Only letters and digits for nif</div>
                <div class="alert alert-danger error" id="nif_errorLE">The nif must be 9 characters</div>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="name" />
                <div class="alert alert-danger error" id="name_errorAL">Only letters for name</div>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input class="form-control" type="text" name="surname" id="surname" placeholder="surname" />
                <div class="alert alert-danger error" id="surname_errorAL">Only letters for Surname</div>
            </div>      
            <input type="submit" class="btn btn-default" value="submit" name="submit">
        </form>
    </div>
    
</body>
</html>
