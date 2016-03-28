<?php
require_once("header.php");
require_once("loadDropDown.php");

$garage = new Garage("aux");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/validateRepair.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"> 

        <body>
            <form id="form" action="<?php echo $_GLOBALS["re_path"]; ?>controller/newRepair.php" id="form" method="POST">
                <?php
                require_once("feedbackMessages.php");
                ?>
                <div id="repair_errorRE" class="alert alert-warning error"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbsp Tots els camps són requerits</div>
                <h4>Repair Info</h4>
                <div class="form-group">
                    <label for="inDate">Vehicle</label>          
                    <?php
                    $garage->populateVehicles();
                    loadDropDown($garage->getVehicles(), "Brand", "repVehicle", "Id_vehicle");
                    ?>
                </div>
                <br/>
                <div class="form-group">
                    <label for="inDate">In Date</label>
                    <input class="form-control datepicker inDate" type="text" name="inDate" id="inDate" placeholder="in date" />
                    <div class="alert alert-warning error" id="inDate_errorDA"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspIn Date must be before Out Date</div>
                </div>
                <div class="form-group">
                    <label for="outDate">Out Date</label>
                    <input class="form-control datepicker outDate" type="text" name="outDate" id="outDate" placeholder="out date" />
                    <div class="alert alert-warning error" id="outDate_errorDA"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspOut Date must be after In Date</div>
                </div>
                <div class="form-group">
                    <label for="whours"> Worked Hours</label>
                    <input class="form-control" type="text" name="whours" id="whours" placeholder="worked hours" />
                    <div class="alert alert-warning error" id="whours_errorIN"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspNumber of hours must be an entire number</div>
                </div>
                <div class="form-group">
                    <label for="inDate">Mechanic Team</label>    

                    <?php
                    $garage->populateMechTeams();
                    loadDropDown($garage->getMechTeams(), "Name", "repMechTeam", "Id_mech_team");
                    ?>
                </div>
                <div class="form-group">
                    <label for="inDate">Reparation type</label>    

                    <?php
                    $garage->populateRepairTypes();
                    loadDropDown($garage->getRepairTypes(), "Description", "repType", "Id_repair_type");
                    ?>
                </div>

                <input type="submit" class="btn btn-default" value="Register Repair" name="submit"/>


            </form>
    </div>
</body>

</html>
