<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Class daoRepairType{
    
    public function insertRepairType($reptype){
        try{
            $con = new DatabaseIns();
            
            $nonquery = $con->prepare("INSERT INTO repair_type(description,cost) values (:description,:cost)");
            $description = $reptype->getDescription();
            $cost = $reptype->getCost();
            
            $nonquery->bindParam(":description", $description);
            $nonquery->bindParam(":cost", $cost);
            
            $con->executeNonQuery($nonquery);
            $con=null;
        } catch (Exception $ex) {
            echo "ERROR AL INSERTAR TIPO REPARACION";
        }
        
        
     
    }
}
