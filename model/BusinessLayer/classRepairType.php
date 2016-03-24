<?php
  Class RepairType{
    private $code;
    private $description;

    public function RepairType($code,$description){
      $this->setCode($code);
      $this->setDescription($description);
    }
    public function setCode($code){
      $this->code=$code;
    }
    public function getCode(){
      return $this->code;
    }
    public function setDescription($description){
      $this->description=$description;
    }
    public function getDescription(){
      return $this->description;
    }

    public function toArray(){
      return array($this->code,$this->description);
    }

    public function getVars(){
      return get_class_vars(get_class($this));
    }
  }
 ?>
