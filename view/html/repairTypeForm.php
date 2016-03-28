<?php
require_once("header.php");
require_once("showMessageWarnings.php");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/validateRepairType.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">  
        <form method="POST" id="form" action="<?php echo $_GLOBALS["re_path"]; ?>controller/newRepairType.php">
            <div id="repairtype_errorRE" class="alert alert-warning error"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbsp Tots els camps són requerits</div>
            <?php
            require_once("feedbackMessages.php");
            ?>

            <h4>Repair type info</h4>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" placeholder="description" />
                <div class="alert alert-warning error" id="description_errorAN"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspOnly letters and digits for Description</div>
            </div>
            <div class="form-group">
                <label for="cost">Cost</label>
                <input class="form-control" type="text" name="cost" id="cost" placeholder="cost" />
                <div class="alert alert-warning error" id="cost_errorDE"><span class='glyphicon glyphicon-alert'></span>&nbsp&nbspOnly decimal number for cost in format (...xx,xx...)</div>
            </div>
            <input type="submit" class="btn btn-default" value="submit" name="submit">
        </form>
        </body>
        </html>
