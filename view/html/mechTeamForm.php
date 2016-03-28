<?php
if (!isset($_GLOBALS["check_path"]))
    require_once("../../config/path.inc.php");
require_once("header.php");
?>
<script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/validateMechTeam.js" type="text/javascript"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">  
    <body>
        <form action="<?php echo $_GLOBALS["re_path"]; ?>controller/newMechTeam.php" method="POST">
                <?php require_once($_GLOBALS["in_path"]."view/html/feedbackMessages.php"); ?>
            <div class="form-group">
                <label for="name">Team name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="name" />
                <div class="alert alert-danger error" id="name_errorAN">Only letters and digits for Team name</div>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input class="form-control" type="text" name="category" id="category" placeholder="category" />
                <div class="alert alert-danger error" id="category_errorAL">Only letters for category</div>
            </div>
            <input type="submit" class="btn btn-default" value="submit" name="submit">
    </body>
    </div>

</html>
