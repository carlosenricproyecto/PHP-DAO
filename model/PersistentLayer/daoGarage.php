<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class daoGarage {

    public function fetchVehicles() {
        $vehicles = array();
        try {
            $con = new DatabaseIns();
            $query = $con->prepare("SELECT * FROM vehicle");
            $res = $con->executeQuery($query);

            foreach ($res as $row) {
                $id=$row["id_vehicle"];
                $plate = $row["plate"];
                $brand = $row["brand"];
                $model = $row["model"];
                $type = $row["gas_type"];
                $nif = $row["nif"];
                $name = $row["name"];
                $surname = $row["surname"];
                $vehicle = new Vehicle($id,$plate,$brand,$model,$type,$nif,$name,$surname);
                array_push($vehicles,$vehicle);
            }
            $con=null;
        } catch (Exception $ex) {
            echo "ERROR recuperando vehiculos";
        }
        return $vehicles;
    }
    public function fetchRepairs(){
        $repairs=array();
        try{
            $con = new DatabaseIns();
            $query = $con ->prepare("SELECT * FROM repair");
            $res=$con->executeQuery($query);
            foreach($res as $row){              
                $id_repair=$row["id_repair"];
                $id_vehicle=$row["id_vehicle"];
                $inDate=$row["inDate"];
                $outDate=$row["outDate"];
                $hours=$row["hours"];
                $id_mech_team=$row["id_mech_team"];
                $id_repair_type=$row["id_repair_type"];
                
                $repair = new Repair($id_repair,$id_vehicle,$inDate,$outDate,$hours,$id_mech_team,$id_repair_type);
                array_push($repairs,$repair);
            }
            $con = null;
        } catch (Exception $ex) {
            echo "ERROR RECUPERANDO REPARACIONES";
        }
        return $repairs;
    }
    
    public function fetchRepairTypes(){
        $reptypes= array();
        try  {
            $con = new DatabaseIns();
            $query = $con->prepare("SELECT * from repair_type");
            $res=$con->executeQuery($query);
            foreach ($res as $row){
                $id_repair_type=$row["id_repair_type"];
                $description=$row["description"];
                $cost=$row["cost"];
                $reptype = new RepairType($id_repair_type,$description,$cost);
                array_push($reptypes,$reptype);
            }
            $con = null;
        } catch (Exception $ex) {
            echo"ERROR RECUPERANDO REPTYPES";
        }
        return $reptypes;
    }
    
    public function fetchMechTeams(){
        $mechteams=array();
        try{
            $con = new DatabaseIns();
            $query = $con->prepare("SELECT * from mech_team");
            $res=$con->executeQuery($query);
            foreach ($res as $row){
                $id_mech_team=$row["id_mech_team"];
                $name=$row["name"];
                $category=$row["category"];
                $mechteam= new MechTeam($id_mech_team,$name,$category);
                array_push($mechteams,$mechteam);
            }
            $con = null;
        } catch (Exception $ex) {
            echo "ERROR RECUPERANDO MECHTEAMS";
        }
        return $mechteams;
    }
    
    public function fetchHistoric($id_vehicle){
        $repairs=array();
        try{
            $con = new DatabaseIns();
            $query = $con ->prepare("SELECT * FROM repair WHERE id_vehicle = :id_vehicle");
            $query->bindParam(":id_vehicle", $id_vehicle);
            $res=$con->executeQuery($query);
            foreach($res as $row){
                
                $id_repair=$row["id_repair"];
                $id_vehicle=$row["id_vehicle"];
                $inDate=$row["inDate"];
                $outDate=$row["outDate"];
                $hours=$row["hours"];
                $id_mech_team=$row["id_mech_team"];
                $id_repair_type=$row["id_repair_type"];
                
                $repair = new Repair($id_repair,$id_vehicle,$inDate,$outDate,$hours,$id_mech_team,$id_repair_type);
                array_push($repairs,$repair);
            }
            $con = null; 
        } catch (Exception $ex) {
            echo "ERROR RECUPERANDO HISTORIAL";
        }
        return $repairs;
    }
    
    public function fetchGasTypes(){
        $gastypes=array();
        try{
            $con = new DatabaseIns();
            $query= $con->prepare("SELECT * FROM gas");
            $res=$con->executeQuery($query);
            
            foreach($res as $row){
                $id_gas=$row["gas_id"];
                $description=$row["description"];
                $gastype=new Gas($id_gas,$description);
                array_push($gastypes,$gastype);
            }
            $con = null;
        } catch (Exception $ex) {

        }
        return $gastypes;
    }

}
?>

