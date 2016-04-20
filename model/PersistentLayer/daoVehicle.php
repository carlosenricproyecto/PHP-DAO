<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("controller/function_AutoLoad.php");

Class daoVehicle {
    public function exists($vehicle){
        $check = true;
        $plateCheck = $this->recoverVehicle($vehicle->getPlate());
        if (!$plateCheck){
            $check =false;
        }
        $idCheck = $this->searchVehicle($vehicle->getId_vehicle());
        if (!$idCheck){
            $check = false;
        }
        return $check;
    }
    public function searchVehicle($id){
         $vehicle = null;
        try {
            $con = new DatabaseIns();
            
            $query = $con->prepare("SELECT * FROM vehicle where id_vehicle = :id ");
            $query->bindParam(":id", $id);
            $res = $con->executeQuery($query);
            
            $con = null;  
            if ($query->rowCount() > 0)
                $vehicle = new Vehicle($res[0]['id_vehicle'],$res[0]['plate'], $res[0]['brand'], $res[0]['model'],$res[0]['gas_type'],$res[0]['nif'],$res[0]['name'],$res[0]['surname']);
        } catch (Exception $ex) {
            echo "error al recuperar vehiculo de la bbdd";
        }
        return $vehicle;   
    }
    
    public function recoverVehicle($plate) {
        $vehicle = null;
        try {
            $con = new DatabaseIns();
            
            $query = $con->prepare("SELECT * FROM vehicle where plate = :plate ");
            $query->bindParam(":plate", $plate);
            $res = $con->executeQuery($query);
            
            $con = null;  
            if ($query->rowCount() > 0)
                $vehicle = new Vehicle($res[0]['id_vehicle'],$res[0]['plate'], $res[0]['brand'], $res[0]['model'],$res[0]['gas_type'],$res[0]['nif'],$res[0]['name'],$res[0]['surname']);
        } catch (Exception $ex) {
            echo "error al recuperar vehiculo de la bbdd";
        }
        return $vehicle;
    }
    
    public function insertVehicle($vehicle){
        try{
            $con = new DatabaseIns();
            
            $nonquery = $con->prepare("INSERT INTO vehicle (plate, brand, model, gas_type, nif, name, surname) values (:plate, :brand, :model, :gas_type, :nif, :name, :surname)");
            $plate=$vehicle->getPlate();
            $brand=$vehicle->getBrand();
            $model=$vehicle->getModel();
            $type=$vehicle->getType();
            $nif=$vehicle->getNif();
            $name=$vehicle->getName();
            $surname=$vehicle->getSurname();
            
            $nonquery->bindParam(":plate",$plate);
            $nonquery->bindParam(":brand",$brand);
            $nonquery->bindParam(":model",$model);
            $nonquery->bindParam(":gas_type",$type);
            $nonquery->bindParam(":nif",$nif);
            $nonquery->bindParam(":name",$name);
            $nonquery->bindParam(":surname",$surname);
            
            $con->executeNonQuery($nonquery);
            
            $con=null;
        } catch (Exception $ex) {
            echo "error al insertar vehiculo";
        }
    }
    
    public function updateVehicle($vehicle){
                try{

            $con = new DatabaseIns();
           
            $nonquery = $con->prepare("UPDATE vehicle SET plate=:plate, brand=:brand, model=:model, gas_type=:gas_type, nif=:nif,name=:name,surname=:surname where id_vehicle=:id_vehicle");
            $id_vehicle = $vehicle->getId_vehicle();
            $plate=$vehicle->getPlate();
            $brand=$vehicle->getBrand();
            $model=$vehicle->getModel();
            $type=$vehicle->getType();
            $nif=$vehicle->getNif();
            $name=$vehicle->getName();
            $surname=$vehicle->getSurname();
           
            
            $nonquery->bindParam(":id_vehicle",$id_vehicle);
            $nonquery->bindParam(":plate",$plate);
            $nonquery->bindParam(":brand",$brand);
            $nonquery->bindParam(":model",$model);
            $nonquery->bindParam(":gas_type",$type);
            $nonquery->bindParam(":nif",$nif);
            $nonquery->bindParam(":name",$name);
            $nonquery->bindParam(":surname",$surname);
            
            $con->executeNonQuery($nonquery);

            $con=null;
        } catch (Exception $ex) {
           
    }

}
}
?>
