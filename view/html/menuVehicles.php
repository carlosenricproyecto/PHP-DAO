<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("header.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <a href="../../controller/newVehicle.php" class="thumbnail menuthumb">
                <span class="glyphicon glyphicon-plus menuicon"></span>
                <p class="menutext">Afegir Vehicle</p>
            </a>
        </div>
        <a href="../../controller/editVehicle.php" class="col-md-5">
            <div class="thumbnail menuthumb">
                <span class="glyphicon glyphicon-edit menuicon"></span>
                <p class="menutext">Editar Vehicle</p>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <a href="../../controller/generateList.php?object=Vehicles" class="thumbnail menuthumb">
                <span class="glyphicon glyphicon-list-alt menuicon"></span>
                <p class="menutext">Llistar Vehicles</p>
            </a>
        </div>
        <div class="col-md-5">
            <div class="thumbnail menuthumb">
                <span class="glyphicon glyphicon-remove menuicon"></span>
                <p class="menutext">Eliminar Vehicle</p>
            </div>
        </div>
        <div class="col-md-1"></div>
        </div>
    </div>

