<?php

include_once('conexion.php');

$nombre = $_POST['nombre_evento'];
$fecha = $_POST['fecha_evento'];
$costo = $_POST['costo_evento'];

$nuevo_evento = "insert into evento (id_evento,nombre_evento,fecha_evento,costo) values (null,'$nombre','$fecha','$costo')";

mysqli_query($conexion,$nuevo_evento);

echo "evento registrado";
?>
