<?php

require_once("function_AutoLoad.php");
if (!isset($_POST['user']) || !isset($_POST['opinion_text'])) {
    echo 'no';
} else {
    
    $user = $_POST['user'];
    $text = $_POST['opinion_text'];
    $date = date('Y-m-d');
    
    try {
        $con = new DatabaseIns();

        $nonquery = $con->prepare("INSERT INTO opinion (user, opinion_text, opinion_date) values (:user, :text, :date)");
        $nonquery->bindParam(":user", $user);
        $nonquery->bindParam(":text", $text);
        $nonquery->bindParam(":date", $date);

        $con->executeNonQuery($nonquery);

        $con = null;
        
        echo 'ok';
    } catch (Exception $ex) {
        echo "no";
    }
}
?>
