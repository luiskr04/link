<?php
include_once('conexion.php');
include_once('lib/phpqrcode/qrlib.php');

$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$grupo = $_POST['grupo'];
$evento =$_POST['evento'];

$filename= "qrusuarios/".$nombre.$a_paterno.$a_materno.".png";
$tamcodeqr = 10;
$correctionerror = "L";

QRcode::png($nombre,$filename,$correctionerror,$tamcodeqr,2);






$nuevo_participante = "insert into participantes (id_alumno,nombre,apellido_p,apellido_m,grupo,id_evento) values (null,'$nombre','$a_paterno','$a_materno','$grupo','$evento')";

mysqli_query($conexion,$nuevo_participante);

header("Location:participante_registrado.php?nombre=".$nombre."&a_paterno=".$a_paterno."&a_materno=".$a_materno."&grupo=".$grupo."&evento=".$evento);
?>
