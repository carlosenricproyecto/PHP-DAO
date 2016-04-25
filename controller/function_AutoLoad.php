<?php
function __autoload($class_name){
    $root = "/var/www/html/PHP-DAO/PHP-DAO";
    $curdir = getcwd();
    chdir($root);

    $nomBusiness="class".$class_name.".php";
    $nomDao=$class_name.".php";
    $arxiuDAO="model/PersistentLayer/".$nomDao;
    $arxiuBusiness="model/BusinessLayer/".$nomBusiness;

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