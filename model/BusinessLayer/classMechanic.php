<?php

Class Mechanic {

    private $id_mechanic;
    private $name;
    private $salary;
    private $id_mech_team;
    
    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }
    
    public function __construct3($name, $salary,$id_mech_team) {
        $this->setName($name);
        $this->setSalary($salary);
        $this->setId_mech_team($id_mech_team);
    }
    
     public function __construct4($id_mechanic,$name, $salary,$id_mech_team) {
        $this->setId_mechanic($id_mechanic);
        $this->setName($name);
        $this->setSalary($salary);
        $this->setId_mech_team($id_mech_team);
    }
    public function persist(){
        $daomechanic = new daoMechanic();
        $daomechanic->insertMechanic($this);
    }
    public function getId_mechanic() {
        return $this->id_mechanic;
    }

    public function setId_mechanic($id_mechanic) {
        $this->id_mechanic = $id_mechanic;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    function getSalary() {
        return $this->salary;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }
    function getId_mech_team() {
        return $this->id_mech_team;
    }

    function setId_mech_team($id_mech_team) {
        $this->id_mech_team = $id_mech_team;
    }


}

?>
