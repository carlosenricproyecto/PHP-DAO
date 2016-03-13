<?php
  Class Garage {
    private $name;
    private $vehicles=null;
    private $repairTypes=null;
    private $mechTeams=null;
    private $repairs=null;
    private $gasTypes=null;

    public function Garage ($name){
      $this->setName($name);
      $this->vehicles= array();
      $this->repairTypes= array();
      $this->mechTeams= array();
      $this->repairs=array();
      $this->users=array();
      $this->gasTypes=array();
    }

    public function getGasTypes(){
      return $this->gasTypes;
    }

    public function setGasTypes($gasTypes){
      $this->gasTypes=$gasTypes;
    }

    public function registerGasType($code,$description){
      $gas = new Gas($code,$description);
      array_push($this->gasTypes,$gas);
    }
    public function getUsers(){
      return $this->users;
    }
    public function setUsers($users){
      $this->users = $users;
    }
    public function getRepairs(){
      return $this->repairs;
    }

    public function setRepairs($repairs){
      $this->repairs=$repairs;
    }
    public function getMechTeams(){
      return $this->mechTeams;
    }
    public function setMechTeams($mechTeams){
      $this->mechTeams=$mechTeams;
    }
    public function getRepairTypes(){
      return $this->repairTypes;
    }

    public function setRepairTypes($repairTypes){
      $this->repairTypes=$repairTypes;
    }
    public function getName(){
      return $this->name;
    }

    public function setName($name){
      $this->name=$name;
    }

    public function getVehicles(){
      return $this->vehicles;
    }

    public function setVehicles($vehicles){
      $this->vehicles=$vehicles;
    }


    public function registerVehicle($plate,$brand,$model,$type,$nif,$name,$surname){
      $vehicle = new Vehicle($plate,$brand,$model,$type,$nif,$name,$surname);
      array_push($this->vehicles,$vehicle);
      }

    public function listVehicles(){
      $string='';
      for ($i=0; $i < count($this->getVehicles()); $i++){
        $string+=$this->getVehicles()[$i];
      }
      return $string;
    }
    public function searchVehicle($plate){
      $array= $this->vehicles;
      $check=false;
      $res=null;
      for ($i=0; $i < count($array) && $check==false; $i++){
        if ($array[$i]->getPlate()=="$plate"){
          $check=true;
          $res=$array[$i];
        }
      }
      return $res;
    }
    public function registerRepair($plate,$inDate,$outDate,$hours,$mechTeamName,$repTypeCode){
      $vehicle=$this->searchVehicle($plate);
      $mechTeam=$this->searchMechTeam($mechTeamName);
      $repType=$this->searchRepairType($repTypeCode);
      $repair = new Repair($vehicle,$inDate,$outDate,$hours,$mechTeam,$repType);
      array_push($this->repairs,$repair);
    }

    public function searchRepairType($code){
      $array=$this->repairTypes;
      $check=false;
      $res=null;
      for ($i=0; $i < count($array) && $check==false; $i++){
        if ($array[$i]->getCode()=="$code"){
          $check=true;
          $res=$array[$i];
        }
      }
      return $res;
    }
    public function registerRepairType($code,$description){
      $repairType = new RepairType($code,$description);
      array_push($this->repairTypes,$repairType);
    }

    public function registerMechTeam($name){
      $mechTeam = new MechTeam($name);
      array_push($this->mechTeams,$mechTeam);
    }

    public function searchMechTeam($name){
      $array=$this->mechTeams;
      $res= null;
      $check=false;
      for ($i=0; $i < count($array) && $check==false; $i++){
        if ($array[$i]->getName()=="$name"){
          $check=true;
          $res=$array[$i];
        }
      }

      return $res;
    }

  public function registerMechanic($opnumber,$name,$mechTeamName){
          $array=$this->searchMechTeam($mechTeamName)->getMechanics();
          echo "<br/>";
          $mechanic = new Mechanic($opnumber,$name);
          array_push($array,$mechanic);
          $this->searchMechTeam($mechTeamName)->setMechanics($array);

  }

  public function searchMechanic($opnumber){
      $mechTeams=$this->mechTeams;
      $res=null;
      for ($i= 0 ; $i < count($mechTeams); $i++){
        $mechanics=$mechTeams[$i]->getMechanics();
         for($j = 0 ; $j < count($mechanics); $j++){
           if ($opnumber == $mechanics[$j]->getOpNumber()){
             $res=$mechanics[$j];
           }
         }
      }
      return $res;
  }

  public function registerUser($login,$password,$admin){
    $user = new User($login,$password,$admin);
    array_push($this->users,$user);
  }

  public function searchUser($login){
    $array=$this->users;
    $res= null;
    $check=false;
    for ($i=0; $i < count($array) && $check==false; $i++){
      if ($array[$i]->getLogin()=="$login"){
        $check=true;
        $res=$array[$i];
      }
    }
  return $res;
  }
    public function populate(){
      $this->registerVehicle("1234","Seat","Panda","Gasolina","1231233J","Pablo","Couto");
      $this->registerVehicle("9876","Fiat","Multipla","Gasoil","1234124M","Jordi","Puig");
      $this->registerVehicle("2345","Volskwagen","Camper","Disel","84694456L","Jesús","Camacho");

      $this->registerMechTeam("A Team");
      $this->registerMechTeam("B Team");

      $this->registerRepairType("01","Change oil");
      $this->registerRepairType("02","Change wheels");

      $this->registerUser("admin","1234",true);
      $this->registerUser("user","user",false);

      $this->registerGasType(1,"gasolina");
      $this->registerGasType(2,"super");
      $this->registerGasType(3,"diesel");

    }
  }
 ?>
