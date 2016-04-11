<?php

Class Garage {

    private $name;
    private $vehicles = null;
    private $repairTypes = null;
    private $mechTeams = null;
    private $repairs = null;
    private $gasTypes = null;

    public function Garage($name) {
        $this->setName($name);
        $this->vehicles = array();
        $this->repairTypes = array();
        $this->mechTeams = array();
        $this->repairs = array();
        $this->users = array();
        $this->gasTypes = array();
    }

    public function getGasTypes() {
        return $this->gasTypes;
    }

    public function setGasTypes($gasTypes) {
        $this->gasTypes = $gasTypes;
    }
    public function populateGasTypes(){
        $daogarage = new daoGarage();
        $gastypes = $daogarage->fetchGasTypes();
        $this->setGasTypes($gastypes);
    }

    public function getUsers() {
        return $this->users;
    }

    public function setUsers($users) {
        $this->users = $users;
    }
    
    public function getRepairs() {
        return $this->repairs;
    }

    public function populateRepairs() {
        $daogarage = new daoGarage();
        $repairs = $daogarage->fetchRepairs();
        $this->setRepairs($repairs);
    }

    public function getVehicleHistoric($id_vehicle) {
        $daogarage = new daoGarage();
        $historic = $daogarage->fetchHistoric($id_vehicle);
        return $historic;
    }

    public function setRepairs($repairs) {
        $this->repairs = $repairs;
    }

    public function getMechTeams() {
        return $this->mechTeams;
    }

    public function setMechTeams($mechTeams) {
        $this->mechTeams = $mechTeams;
    }

    public function populateMechTeams() {
        $daogarage = new daoGarage();
        $mechteams = $daogarage->fetchMechTeams();
        $this->setMechTeams($mechteams);
    }

    public function getRepairTypes() {
        return $this->repairTypes;
    }

    public function setRepairTypes($repairTypes) {
        $this->repairTypes = $repairTypes;
    }

    public function populateRepairTypes() {
        $daogarage = new daoGarage();
        $repairTypes = $daogarage->fetchRepairTypes();
        $this->setRepairTypes($repairTypes);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getVehicles() {
        return $this->vehicles;
    }

    public function setVehicles($vehicles) {
        $this->vehicles = $vehicles;
    }
    
    public function addVehicle($plate,$brand,$model,$type,$nif,$name,$surname){
        $vehicle = new Vehicle($plate,$brand,$model,$type,$nif,$name,$surname);
        array_push($this->getVehicles(),$vehicle);
        $vehicle->persist();
    }
    public function populateVehicles() {
        $daogarage = new daoGarage();
        $vehicles = $daogarage->fetchVehicles();
        $this->setVehicles($vehicles);
    }
    public function searchVehicle($id){
        $res = false;
        $aux = $this->getVehicles();
        for ($i = 0 ; $i < count($aux); $i++ ){
            if ($aux[$i]->getId_vehicle() == $id){
                $res = $aux[$i];
            }
        }
        return $res;
    }

}

?>
