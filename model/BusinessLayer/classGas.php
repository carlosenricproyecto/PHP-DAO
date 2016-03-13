<?php
  Class Gas{
    private $code;
    private $description;

    public function Gas($code,$description){
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

  }

 ?>
