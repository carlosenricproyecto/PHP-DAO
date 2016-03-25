<?php
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class DatabaseIns extends PDO{
    private $host;
    private $user;
    private $pass;
    private $dbname;
 
    private $dbh;
    private $error;
 
    public function __construct(){
        //Set attributes
        $this->setHost($GLOBALS['server']);
        $this->setUser($GLOBALS['USER']);
        $this->setPass($GLOBALS['PASS']);
        $this->setDbName($GLOBALS['dbname']);
        $this->Open();


    }

    public function Open(){
        try{
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        parent::__construct($dsn,$this->getUser(),$this->getPass());       
        }catch(Exception $e){
            echo "ERROR AL CREAR CONEXIÓN";
        }
    }
    
    public function executeNonQuery($nonquery){
        $nonquery->execute();
    }
    public function executeQuery($query){
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function getDbName(){
        return $this->dbname;
    }

    public function setDbName($value){
        return $this->dbname=$value;
    }

    public function getHost(){
        return $this->host;
    }
    
    public function setHost($value){
        $this->host = $value;
    }
    
    public function getUser(){
        return $this->user;
    }

    public function setUser($value){
        $this->user = $value;
    }
    
    public function getPass(){
        return $this->pass;
    }

    public function setPass($value){
        $this->pass = $value;
    }

}
?>