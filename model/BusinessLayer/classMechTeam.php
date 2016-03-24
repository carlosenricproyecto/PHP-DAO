<?php
Class MechTeam{
  private $name;
  private $mechanics=null;

  public function MechTeam($name){
    $this->setName($name);
    $this->mechanics= array();
  }

  public function setName($name){
    $this->name=$name;
  }
  public function getName(){
    return $this->name;
  }
  public function setMechanics($mechanics){
    $this->mechanics=$mechanics;
  }
  public function getMechanics(){
    return $this->mechanics;
  }

  public function toString(){
    return "MechTeam{ Name:".$this->name."}";
  }

  public function toArray(){
    return $array=array($this->getName(),count($this->getMechanics()));
  }
  public function getVars(){
    return get_class_vars(get_class($this));
  }
}
 ?>
