<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daoMechanic {

    public function insertMechanic($mechanic) {
        try {
            $con = new DatabaseIns();

            $nonquery = $con->prepare("INSERT INTO mechanic (name,salary,id_mech_team) VALUES (:name,:salary,:id_mech_team)");

            $name = $mechanic->getName();
            $salary = $mechanic->getSalary();
            $id_mech_team = $mechanic->getId_mech_team();

            $nonquery->bindParam(":name", $name);
            $nonquery->bindParam(":salary", $salary);
            $nonquery->bindParam(":id_mech_team",$id_mech_team);

            $con->executeNonQuery($nonquery);
            $con=null;
        } catch (Exception $ex) {
            echo "ERROR INSERTANDO MECANICO";
        }
    }

}
