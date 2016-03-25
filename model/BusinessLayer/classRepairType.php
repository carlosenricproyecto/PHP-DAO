<?php

Class RepairType {

    private $id_repair_type;
    private $description;
    private $cost;

    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }

    public function __construct2($description, $cost) {
        $this->setDescription($description);
        $this->setCost($cost);
    }

    public function __construct3($id_repair_type, $description, $cost) {
        $this->setId_repair_type($id_repair_type);
        $this->setDescription($description);
        $this->setCost($cost);
    }

    public function persist() {
        $daoreptype = new daoRepairType();
        $daoreptype->insertRepairType($this);
    }

    function getId_repair_type() {
        return $this->id_repair_type;
    }

    function setId_repair_type($id_repair_type) {
        $this->id_repair_type = $id_repair_type;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function toArray() {
        return array($this->getId_repair_type(), $this->getDescription(),$this->getCost());
    }

    public function getVars() {
        return get_class_vars(get_class($this));
    }

    public function getCost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
    }

}

?>
