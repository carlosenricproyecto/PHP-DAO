<?php
function showMessageWarnings($array){
  for($i = 0 ; $i < count($array);$i++){
    echo "<div class='alert alert-warning '><span class='glyphicon glyphicon-alert'></span>&nbsp&nbsp".$array[$i]."</div>";
    }
  }


?>
