<?php

Class MechTeam {

    private $id_mech_team;
    private $name;
    private $category;
    private $mechanics = null;

    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }

    public function __construct2($name,$category) {
        $this->setName($name);
        $this->setCategory($category);
        $this->mechanics = array();
    }
        public function __construct3($id_mech_team,$name,$category) {
        $this->setId_mech_team($id_mech_team);
        $this->setName($name);
        $this->setCategory($category);
        $this->mechanics = array();
    }

    public function persist() {
        $daomechteam = new daoMechTeam();
        $daomechteam->insertMechTeam($this);
    }

    function getId_mech_team() {
        return $this->id_mech_team;
    }

    function getCategory() {
        return $this->category;
    }

    function setId_mech_team($id_mech_team) {
        $this->id_mech_team = $id_mech_team;
    }

    function setCategory($category) {
        $this->category = $category;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setMechanics($mechanics) {
        $this->mechanics = $mechanics;
    }

    public function getMechanics() {
        return $this->mechanics;
    }

    public function toString() {
        return "MechTeam{ Name:" . $this->name . "}";
    }

    public function toArray() {
        return $array = array($this->getId_mech_team(),$this->getName(), count($this->getMechanics()));
    }

    public function getVars() {
        return get_class_vars(get_class($this));
    }

}

?>
