<?php
$servidor = "localhost";
$basedatos = "id7352247_link_db";
$username = "root";
$password = "";

$conexion = mysqli_connect($servidor,$username,$password);
$db = mysqli_select_db($conexion,$basedatos)or die(mysqli_error());

?>
