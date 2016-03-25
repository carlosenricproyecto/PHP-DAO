<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("controller/function_AutoLoad.php");

Class daoUser {

    public function recoverUser($login) {
        $user = null;
        try {
            $con = new DatabaseIns();
            $query = $con->prepare("SELECT * FROM user where login = :login ");
            $query->bindParam(":login", $login);
            $res = $con->executeQuery($query);
            $con=null;
            if($query->rowCount()> 0) $user = new User($res[0]['login'], $res[0]['password'], $res[0]['admin']);
        } catch (Exception $ex) {
            echo "error al recuperar usuario de la bbdd";
        }
        return $user;
    }

}

?>