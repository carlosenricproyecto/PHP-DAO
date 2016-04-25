<?php

require_once("function_AutoLoad.php");

try {
    $con = new DatabaseIns();

    $query = $con->prepare("SELECT * FROM opinion;");
    $res = $con->executeQuery($query);
    $con = null;

    $newArray = array();
    $auxArray = array();
    for ($i = 0; $i < count($res); $i++) {
        $auxArray = array();
        foreach ($res[$i] as $r){
            array_push($auxArray, $r);
        }
        array_push($newArray, $auxArray);
    }
    
echo json_encode($newArray);
} catch (Exception $ex) {
    echo "no";
}
?>
