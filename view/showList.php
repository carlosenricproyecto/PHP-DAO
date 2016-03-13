<?php
require_once("header.php");
require_once("../model/autoload.php");
$array=$_SESSION["list"];
$title=$_SESSION["title"];
  $class_vars=$array[0]->getVars();
?>

  <div class='panel panel-default'>
  <div class='panel-heading text-center'> <?php echo $title ?></div>
  <table class='table'><tr>


  <?php foreach ($class_vars as $name => $value){
      echo "<th>".$name."</th>";
  } ?>

  </tr>

  <?php
  foreach($array as $repair){
    echo "<tr>";
    $aux=$repair->toArray();
    foreach($aux as $string){
      echo "<td>".$string."</td>";
    }
    echo "</tr>";
  }
 ?>

</table></div>
