
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   </div>


        <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-left">

<?php
  if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"]==true){
?>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>view/html/vehicleForm.php"> Register a Vehicle </a></li>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>view/html/repairTypeForm.php"> New Repair Type</a></li>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>view/html/mechTeamForm.php"> New Mechanic Team</a></li>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>view/html/mechanicForm.php"> Register Mechanic </a></li>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>view/html/repairForm.php"> Register Reparation </a></li>
        <li role="separator" class="divider"><a></a></li>
<?php } ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Lists <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='<?php echo $_GLOBALS["re_path"]; ?>controller/generateList.php?object=Vehicles'>Vehicles</a></li>
            <li><a href='<?php echo $_GLOBALS["re_path"]; ?>controller/generateList.php?object=Mechanic Teams'>Mechanic Teams</a></li>
            <li><a href='<?php echo $_GLOBALS["re_path"]; ?>controller/generateList.php?object=Reparations'>Reparations</a></li>
            <li><a href='<?php echo $_GLOBALS["re_path"]; ?>controller/generateList.php?object=Repair Types'>Repair Type</a></li>
          </ul>
        </li>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>view/html/historicForm.php"> Show Historic </a></li>
        <li><a href="<?php echo $_GLOBALS["re_path"]; ?>controller/closeSession.php"> Close session </a></li>
        <li>


      </ul>
    </div>
  </div>
  </div>

  <div class="container">
  <div class="page-header text-center">
      <h2>Dr. Sayos Garage<small> Best Garage Ever</small></h2>
  </div>
