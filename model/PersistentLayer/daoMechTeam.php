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
    
      public function fetchMechanics($mechTeam){
        $mechanics=array();
        try{
            $con = new DatabaseIns();
            $query = $con->prepare("SELECT * FROM mechanic where id_mech_team = :id_mech_team");
            $id_mech_team=$mechTeam->getId_mech_team();
            $query->bindParam(":id_mech_team", $id_mech_team);
            
            $res=$con->executeQuery($query);
            
            foreach($res as $row){
                $id_mechanic=$row["id_mechanic"];
                $name=$row["name"];
                $salary=$row["salary"];
                $id_mech_team=$row["id_mech_team"];
                $mechanic=new Mechanic($id_mechanic,$name,$salary,$id_mech_team);
                array_push($mechanics,$mechanic);
            }
        } catch (Exception $ex) {

        }
        return $mechanics;
    }


}
