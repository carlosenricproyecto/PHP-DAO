<?php
if (!isset($_GLOBALS["check_path"]))
    require_once("../../config/path.inc.php");
require_once($_GLOBALS["in_path"] . "controller/function_AutoLoad.php");
require_once("loadDropDown.php");
require_once("header.php");
require_once("showMessageWarnings.php");
$garage = new Garage("aux");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/validateMech.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">  
        <form id="form" action="<?php echo $_GLOBALS["re_path"]; ?>controller/newMechanic.php" method="POST">
            <?php
            require_once("feedbackMessages.php");
            ?>
            <div id="mechanic_errorRE" class="alert alert-warning error"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbsp Tots els camps són requerits</div>
            <h4>Mechanic Info </h4>
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="name" />
                <div class="alert alert-warning error" id="name_errorAL"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspOnly letters for name</div>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input class="form-control" type="text" name="salary" id="salary" placeholder="salary" />
                <div class="alert alert-warning error" id="salary_errorDE"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspOnly decimal number for cost in format (...xx,xx...)</div>
            </div>
            <div class="form-group">
                <label for="name">Mech team</label>
                <?php
                $garage->populateMechTeams();
                loadDropDown($garage->getMechTeams(), "Name", "mechteam", "id_mech_team");
                ?>
            </div>


            <br/><input type="submit" class="btn btn-default" value="Register Mechanic" name="submit"/></form>


    </div>
</body>

</html>
