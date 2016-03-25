<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daoMechTeam {

    public function insertMechTeam($mechTeam) {
        try {
            $con = new DatabaseIns();

            $nonquery = $con->prepare("INSERT INTO mech_team (name,category) values (:name,:category)");
            $name = $mechTeam->getName();
            $category = $mechTeam->getCategory();
            $nonquery->bindParam(":name", $name);
            $nonquery->bindParam(":category", $category);

            $con->executeNonQuery($nonquery);
            $con = null;
        } catch (Exception $ex) {
            echo "ERROR INTRODUCIENDO MECHTEAM";
        }
    }

}
