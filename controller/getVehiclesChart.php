<?php

require_once("function_AutoLoad.php");

try {
    $con = new DatabaseIns();

    $query = $con->prepare("SELECT brand, count(*) as qnt FROM vehicle group by brand;");
    $res = $con->executeQuery($query);
    $con = null;

    $newArray = array();
    $auxArray = array();
    for ($i = 0; $i < count($res); $i++) {
        $auxArray = array();
        $auxArray['label'] = $res[$i]['brand'];
        $auxArray['value'] = $res[$i]['qnt'];
        
        array_push($newArray, $auxArray);
    }
    
echo json_encode($newArray);
} catch (Exception $ex) {
    echo "no";
}
?>
