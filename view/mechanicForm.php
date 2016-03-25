<?php
require_once("loadDropDown.php");
require_once("header.php");
require_once("showMessageWarnings.php");
$garage = new Garage("aux");
?>

<html>

  <head>
    <meta charset="utf-8" />
    <style type="text/css"></style>
  </head>

  <body>
    <form action="../controller/newMechanic.php" method="POST">
      Name: <input type="text" name="name" /><br/>
      Salary: <input type="text" name="salary"/><br/>
      Mechanic Team:
<?php
  $garage->populateMechTeams();
  loadDropDown($garage->getMechTeams(),"Name","mechteam","id_mech_team");
 ?>

      <br/><input type="submit" value="Register Mechanic" name="submit"/></form>

      <?php
      require_once("feedbackMessages.php");
       ?>

  </body>

</html>
