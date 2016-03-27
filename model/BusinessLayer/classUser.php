<?php

Class User {

    private $login;
    private $password;
    private $admin;

    public function __construct() {
        $params = func_get_args();
        $num_params = func_num_args();
        $function = "__construct" . $num_params;
        if (method_exists($this, $function)) {
            call_user_func_array(array($this, $function), $params);
        }
    }

    public function __construct3($login, $password, $admin) {
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setAdmin($admin);
    }

    public function __construct2($login, $password) {
        $this->setLogin($login);
        $this->setPassword($password);
    }

    public function validateUser() {
        if ($this->exists()) {
            $daouser = new daoUser();
            $valid = $daouser->recoverUser($this->getLogin());
            if ($valid->getLogin() == $this->getLogin() && $valid->getPassword() == $this->getPassword()) {
                return true;
            }
        }
        return false;
    }

    public function populate() {
        $daouser = new daoUser();
        if ($this->exists()) {
            $user = $daouser->recoverUser($this->getLogin());
            $this->setLogin($user->getLogin());
            $this->setPassword($user->getPassword());
            if ($user->isAdmin()!= 0){
                $this->setAdmin(true);
            }else{
                $this->setAdmin(false);
            }
        }
    }

    public function exists() {
        $daouser = new daoUser();
        $check = $daouser->recoverUser($this->getLogin());
        if ($check)
            return true;
        else
            return false;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function isAdmin() {
        return $this->admin;
    }

    public function setAdmin($admin) {
        $this->admin = $admin;
    }

}

?>
