<?php

Class Repair {

    private $id_repair;
    private $id_vehicle;
    private $inDate;
    private $outDate;
    private $hours;
    private $id_mech_team;
    private $id_repair_type;

    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }

    public function __construct6($id_vehicle, $inDate, $outDate, $hours, $id_mech_team, $id_repair_type) {
        $this->setId_Vehicle($id_vehicle);
        $this->setInDate($inDate);
        $this->setOutDate($outDate);
        $this->setHours($hours);
        $this->setId_mech_team($id_mech_team);
        $this->setId_repair_type($id_repair_type);
    }
    
        public function __construct7($id_repair,$id_vehicle, $inDate, $outDate, $hours, $id_mech_team, $id_repair_type) {
        $this->setId_repair($id_repair);
        $this->setId_Vehicle($id_vehicle);
        $this->setInDate($inDate);
        $this->setOutDate($outDate);
        $this->setHours($hours);
        $this->setId_mech_team($id_mech_team);
        $this->setId_repair_type($id_repair_type);
    }


    public function persist() {
        $daorepair = new daoRepair();
        $daorepair->insertRepair($this);
    }

    function getId_repair() {
        return $this->id_repair;
    }

    function setId_repair($id_repair) {
        $this->id_repair = $id_repair;
    }

    function getId_vehicle() {
        return $this->id_vehicle;
    }

    function getId_mech_team() {
        return $this->id_mech_team;
    }

    function getId_repair_type() {
        return $this->id_repair_type;
    }

    function setId_vehicle($id_vehicle) {
        $this->id_vehicle = $id_vehicle;
    }

    function setId_mech_team($id_mech_team) {
        $this->id_mech_team = $id_mech_team;
    }

    function setId_repair_type($id_repair_type) {
        $this->id_repair_type = $id_repair_type;
    }

    public function setInDate($inDate) {
        $this->inDate = $inDate;
    }

    public function getInDate() {
        return $this->inDate;
    }

    public function setOutDate($outDate) {
        $this->outDate = $outDate;
    }

    public function getOutDate() {
        return $this->outDate;
    }

    public function setHours($hours) {
        $this->hours = $hours;
    }

    public function getHours() {
        return $this->hours;
    }

    public function toString() {
        return "Repair{" . $this->getVehicle()->toString() . " InDate: " . $this->getInDate() . " OutDate: " . $this->getOutDate() . " Hours: " . $this->getHours() . " MechTeam" . $this->getMechTeam()->toString() . "}";
    }

    public function toArray() {
        return $array = array($this->getId_repair(),$this->getId_vehicle(), $this->getInDate(), $this->getOutDate(), $this->getHours(), $this->getId_mech_team(), $this->getId_repair_type());
    }

    public function getVars() {
        return get_class_vars(get_class($this));
    }

}

?>
