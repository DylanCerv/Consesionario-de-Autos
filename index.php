<?php

include_once "model/conexion.php";
$sentencia = $BD -> query('SELECT * FROM vehiculo');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($vehiculo);


require_once "template/plantilla.php";

?>


