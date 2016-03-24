<?php
  Class Repair{
    private $vehicle;
    private $inDate;
    private $outDate;
    private $hours;
    private $mechTeam;
    private $repType;

    public function Repair($vehicle,$inDate,$outDate,$hours,$mechTeam,$repType){
        $this->setVehicle($vehicle);
        $this->setInDate($inDate);
        $this->setOutDate($outDate);
        $this->setHours($hours);
        $this->setMechTeam($mechTeam);
        $this->setRepType($repType);
    }


    public function setRepType($type){
      $this->type=$type;
    }
    public function getRepType(){
      return $this->type;
    }
    public function setVehicle($vehicle){
      $this->vehicle=$vehicle;
    }

    public function getVehicle(){
      return $this->vehicle;
    }

    public function setInDate($inDate){
      $this->inDate=$inDate;
    }

    public function getInDate(){
      return $this->inDate;
    }

    public function setOutDate($outDate){
      $this->outDate=$outDate;
    }
    public function getOutDate(){
      return $this->outDate;
    }

    public function setHours($hours){
      $this->hours=$hours;
    }

    public function getHours(){
      return $this->hours;
    }
    public function getMechTeam(){
      return $this->mechTeam;
    }
    public function setMechTeam($mechTeam){
      $this->mechTeam=$mechTeam;
    }

    public function toString(){
      return "Repair{".$this->getVehicle()->toString()." InDate: ".$this->getInDate()." OutDate: ".$this->getOutDate()." Hours: ".$this->getHours()." MechTeam".$this->getMechTeam()->toString()."}";
    }

    public function toArray(){
      return $array=array($this->getVehicle()->getPlate(),$this->getInDate(),$this->getOutDate(),$this->getHours(),$this->getMechTeam()->getName(),$this->getRepType()->getDescription());
    }

    public function getVars(){
      return get_class_vars(get_class($this));
    }
  }
 ?>
