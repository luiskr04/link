<?php
include_once(conexion.php);

$nombre = $_POST['nombre_evento'];
$fecha = $_POST['fecha_evento'];
$costo = $_POST['costo_evento'];

$nuevo_participante = "insert into evento values (null,'$nombre','$fecha','$costo')";

mysqli_query($nuevo_participante);

header 
?>
