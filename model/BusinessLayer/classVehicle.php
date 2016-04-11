<?php

class Vehicle {

    private $id_vehicle;
    private $plate;
    private $brand;
    private $model;
    private $type;
    private $nif;
    private $name;
    private $surname;

    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }

    public function __construct7($plate, $brand, $model, $type, $nif, $name, $surname) {
        $this->setPlate($plate);
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setType($type);
        $this->setNif($nif);
        $this->setName($name);
        $this->setSurname($surname);
    }
    
        public function __construct8($id_vehicle,$plate, $brand, $model, $type, $nif, $name, $surname) {
        $this->setId_Vehicle($id_vehicle);
        $this->setPlate($plate);
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setType($type);
        $this->setNif($nif);
        $this->setName($name);
        $this->setSurname($surname);
    }
    public function exists() {
        $daovehicle = new daoVehicle();
        $check = $daovehicle->recoverVehicle($this->getPlate());
        if ($check)
            return true;
        else
            return false;
    }

    public function persist() {
        $daovehicle = new daoVehicle();
        if (!$this->exists()){           
            $daovehicle->insertVehicle($this);
        }else{
            $vehicle=$daovehicle->recoverVehicle($this->getPlate());
            var_dump($vehicle);
            $daovehicle->updateVehicle($vehicle);
        }

    }

    function getId_vehicle() {
        return $this->id_vehicle;
    }

    function setId_vehicle($id_vehicle) {
        $this->id_vehicle = $id_vehicle;
    }

        public function setPlate($value) {
        $this->plate = $value;
    }

    public function getPlate() {
        return $this->plate;
    }

    public function setBrand($value) {
        $this->brand = $value;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setModel($value) {
        $this->model = $value;
    }

    public function getModel() {
        return $this->model;
    }

    public function setType($value) {
        $this->type = $value;
    }

    public function getType() {
        return $this->type;
    }

    public function setNif($value) {
        $this->nif = $value;
    }

    public function getNif() {
        return $this->nif;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($value) {
        $this->surname = $value;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function toString() {
        return "Vehicle{Id: " . $this->getId() . " Plate: " . $this->getPlate() . " Brand: " . $this->getBrand() . " Model: " . $this->getModel() . " Type: " . $this->getType() . " NIF: " . $this->getNif() . " Name: " . $this->getName() . " Surname: " . $this->getSurname() . "}";
    }

    public function toArray() {
        return $array = array($this->getId_Vehicle(), $this->getPlate(), $this->getBrand(), $this->getModel(), $this->getType(), $this->getNif(), $this->getName(), $this->getSurname());
    }

    public function getVars() {
        return get_class_vars(get_class($this));
    }

}

?>
