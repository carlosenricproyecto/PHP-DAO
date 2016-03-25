<?php
function loadDropDown($array,$field,$name,$value){
    $field="get".$field;
    $value="get".$value;
    echo "<select name='$name'>";
    for ($i = 0 ; $i < count($array) ; $i++){
      echo '<option value="'.$array[$i]->$value().'">'.$array[$i]->$field().'</option>';
    }
    echo "</select>";
}
 ?>
