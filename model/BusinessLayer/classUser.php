<?php
  Class User {
    private $login;
    private $password;
    private $admin;

    public function User($login,$password,$admin){
      $this->setLogin($login);
      $this->setPassword($password);
      $this->setAdmin($admin);
    }

    public function getLogin(){
      return $this->login;
    }

    public function setLogin($login){
      $this->login=$login;
    }

    public function getPassword(){
      return $this->password;
    }

    public function setPassword($password){
      $this->password=$password;
    }

    public function isAdmin(){
      return $this->admin;
    }

    public function setAdmin($admin){
      $this->admin=$admin;
    }
  }
 ?>
