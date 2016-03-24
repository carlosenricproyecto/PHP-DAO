<?php
function loadDropDown($array,$field,$name){
    $field="get".$field;
    echo "<select name='$name'>";
    for ($i = 0 ; $i < count($array) ; $i++){
      echo '<option value="'.$array[$i]->$field().'">'.$array[$i]->$field().'</option>';
    }
    echo "</select>";
}
 ?>
