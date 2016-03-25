<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class daoRepair{
    public function insertRepair($repair){
        try{
            $con = new DatabaseIns();
            $nonquery =$con->prepare("INSERT INTO repair (id_vehicle,inDate,outDate,hours,id_mech_team,id_repair_type) values (:id_vehicle,:inDate,:outDate,:hours,:id_mech_team,:id_repair_type)");
            
            $id_vehicle=$repair->getId_vehicle();
            $inDate=$repair->getInDate();
            $outDate=$repair->getOutDate();
            $hours=$repair->getHours();
            $id_mech_team=$repair->getId_mech_team();
            $id_repair_type=$repair->getId_repair_type();
            
            $nonquery->bindParam(":id_vehicle",$id_vehicle);
            $nonquery->bindParam(":inDate",$inDate);
            $nonquery->bindParam(":outDate", $outDate);
            $nonquery->bindParam(":hours",$hours);
            $nonquery->bindParam(":id_mech_team",$id_mech_team);
            $nonquery->bindParam(":id_repair_type",$id_repair_type);
            
            $con->executeNonQuery($nonquery);
            var_dump($nonquery->errorInfo());
        } catch (Exception $ex) {
            echo "ERROR AL INSERTAR REPARACION";

        }
    }
}
