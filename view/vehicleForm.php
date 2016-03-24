<?php
  require_once("header.php");
  require_once("showMessageWarnings.php");
  require_once("loadDropDown.php");
  $garage=unserialize($_SESSION["garage"]);
?>

    <form method="POST" action="../controller/newVehicle.php">
    <table>
      <tr><td colspan="2" disabled>Vehicle Data</td></tr>
      <tr><td>Plate</td><td> <input type="text" name=plate /></td></tr>
      <tr><td>Brand</td><td> <input type="text" name="brand" /></td></tr>
      <tr><td>Model</td><td> <input type="text" name="model" /></td></tr>
       <tr><td>Type</td><td>
      <?php
        loadDropDown($garage->getGasTypes(),"Description","type");
       ?>
     </td></tr>
      <tr><td colspan="2" disabled>Owner Data</td></tr>
      <tr><td>NIF</td><td> <input type="text" name="nif" /></td></tr>
      <tr><td>Name</td><td> <input type="text" name="name" /></td></tr>
      <tr><td>Surname</td><td> <input type="text" name="surname" /></td></tr>
      <tr><td colspan="2"><input type="submit" value="Register" name="submit"/></td></tr>
    </table>
  </form>

<?php
  if (isset($_SESSION["warning"])){
    showMessageWarnings($_SESSION["warning"]);
  }
 ?>
  </body>
</html>
