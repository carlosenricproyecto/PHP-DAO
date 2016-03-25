<?php

Class Gas {

    private $id_gas;
    private $description;

    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }

    public function __construct2($id_gas, $description) {
        $this->setId_gas($id_gas);
        $this->setDescription($description);
    }
    function getId_gas() {
        return $this->id_gas;
    }

    function setId_gas($id_gas) {
        $this->id_gas = $id_gas;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

}

?>
