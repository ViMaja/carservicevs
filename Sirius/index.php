<?php
/*CONTROLLER*/
require_once "controller/plantilla.controller.php";
require_once "controller/conexion.controller.php";

/*MODELS*/
require_once "model/conexion.php";
require_once "model/dao/conexion.dao.php";

/*CREAR OBJETO DE ARRANQUE*/
$objPlantilla = new PlantillaController();
$objPlantilla -> ctrPlantilla();



?>