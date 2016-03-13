<?php
  class Vehicle{
    private $plate;
    private $brand;
    private $model;
    private $type;
    private $nif;
    private $name;
    private $surname;

    public function Vehicle($plate,$brand,$model,$type,$nif,$name,$surname){
      $this->setPlate($plate);
      $this->setBrand($brand);
      $this->setModel($model);
      $this->setType($type);
      $this->setNif($nif);
      $this->setName($name);
      $this->setSurname($surname);
    }

    public function setPlate($value){
      $this->plate=$value;
    }

    public function getPlate(){
      return $this->plate;
    }

    public function setBrand($value){
      $this->brand=$value;
    }

    public function getBrand(){
      return $this->brand;
    }

    public function setModel($value){
      $this->model=$value;
    }

    public function getModel(){
      return $this->model;
    }

    public function setType($value){
      $this->type=$value;
    }

    public function getType(){
      return $this->type;
    }
    public function setNif($value){
      $this->nif=$value;
    }

    public function getNif(){
      return $this->nif;
    }

    public function setName($value){
      $this->name=$value;
    }

    public function getName(){
      return $this->name;
    }

    public function setSurname($value){
      $this->surname=$value;
    }

    public function getSurname(){
      return $this->surname;
    }


    public function toString(){
      return "Vehicle{ Plate: ".$this->getPlate()." Brand: ".$this->getBrand()." Model: ".$this->getModel()." Type: ".$this->getType()." NIF: ".$this->getNif()." Name: ".$this->getName()." Surname: ".$this->getSurname()."}";
    }

    public function toArray(){
      return $array=array($this->getPlate(),$this->getBrand(),$this->getModel(),$this->getType(),$this->getNif(),$this->getName(),$this->getSurname());
    }

    public function getVars(){
      return get_class_vars(get_class($this));
    }
  }
?>
