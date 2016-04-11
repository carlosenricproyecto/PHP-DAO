<?php
function loadDropDown($array,$field,$name,$value,&$selected=""){
    $field="get".$field;
    $value="get".$value;
    echo "<select class='form-control' name='$name' id='$name'>";
    for ($i = 0 ; $i < count($array) ; $i++){
      echo '<option value="'.$array[$i]->$value().'"';
      if ($selected == $array[$i]->$value()){
          echo "selected";
      }
      echo ">".$array[$i]->$field().'</option>';
    }
    echo "</select>";
}
 ?>
