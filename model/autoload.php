<?php

function __autoload($class_name){
    require_once "BusinessLayer/class".ucfirst($class_name).".php";
}

?>
