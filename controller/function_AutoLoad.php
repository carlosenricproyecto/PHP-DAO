<?php
function __autoload($class_name){
    $root = $_SERVER['DOCUMENT_ROOT']+"M07/UF2/projecte";
    $curdir = getcwd();
    chdir("$root");

    $nomFile="class".$class_name.".php";
    $arxiuDAO="model/PersistentLayer/".$nomFile;
    $arxiuBusiness="model/BusinessLayer/".$nomFile;
    $arxiuConfig="config/".$nomFile;

    if(file_exists($arxiuDAO)){
        require_once $arxiuDAO;
    }else{
       if(file_exists($arxiuBusiness)){
           require_once $arxiuBusiness;
       }
    }
    chdir($curdir);
}
?>