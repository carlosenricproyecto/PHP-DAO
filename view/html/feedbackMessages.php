<?php
require_once("showMessageWarnings.php");
require_once("showMessageSuccess.php");
if (isset($warnings)) { ?>

    <div class="row">
        <div class="col-md-12">
            
            <?php showMessageWarnings($warnings); ?>

        </div></div>

<?php } ?>

<?php if (isset($success)){ ?>

        <div class="row">
        <div class="col-md-12">
            <?php showMessageSuccess($success); ?>

        </div></div>

<?php } ?>