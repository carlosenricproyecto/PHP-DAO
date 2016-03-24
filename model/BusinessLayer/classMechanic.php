<?php

  Class Mechanic{
    private $opNumber;
    private $name;

    public function Mechanic($opNumber,$name){
      $this->setOpNumber($opNumber);
      $this->setName($name);
    }
    public function getOpNumber(){
      return $this->opNumber;
    }
    public function setOpNumber($opNumber){
      return $this->opNumber=$opNumber;
    }
    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name=$name;
    }
  }

 ?>
