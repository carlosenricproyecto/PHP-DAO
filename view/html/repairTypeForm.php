<?php
require_once("header.php");
if (!isset($_GLOBALS["check_path"])) require_once("../../config/path.inc.php");
require_once($_GLOBALS["in_path"]."controller/function_AutoLoad.php");
require_once("showMessageWarnings.php");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/validateRepairType.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">  
        <form method="POST" action="<?php echo $_GLOBALS["re_path"]; ?>controller/newRepairType.php">
            <h4>Repair type info</h4>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" placeholder="description" />
                <div class="alert alert-danger error" id="description_errorAN">Only letters and digits for Description</div>
            </div>
            <div class="form-group">
                <label for="cost">Cost</label>
                <input class="form-control" type="text" name="cost" id="cost" placeholder="cost" />
                <div class="alert alert-danger error" id="cost_errorDE">Only decimal number for cost in format (...xx,xx...)</div>
            </div>
            <input type="submit" class="btn btn-default" value="submit" name="submit">
        </form>
        </body>
        </html>

        <?php
        require_once("feedbackMessages.php");
        ?>
