<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf8">
	</head>
	
	<body>
		<h1>Participante Registrado Correctamente.</h1>
		<?php echo $_GET['nombre']."&a_paterno=".$_GET['
		a_paterno']."&a_materno".$_GET['a_materno']."&grupo=".$_GET['
		grupo']."&evento".$_GET['evento'];?>
		
		<a href="lib/TCPDF-6.2.0/Generador/ficha_qr.php?nombre=<?php echo $_GET['nombre']."&a_paterno=".$_GET['
		a_paterno']."&a_materno".$_GET['a_materno']."&grupo=".$_GET['
		grupo']."&evento".$_GET['evento'];?>"><button>Descargar Ficha QR</button></a>
		
		<a href="lista_participantes.php"><button>Ver lista de Participantes</button></a>
		
		<a href="form_participantes.php"><button>Registrar Otro Participante</button></a>
		
		<a href="index.php"><button>Menu Principal</button></a>
	</body>
	
</html>
