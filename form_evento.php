<!DOCTYPE html>
<html lang="es-MX">
	
	<HEAD>
		<meta charset="utf8">
		<title>Registro de Evento.</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'name='viewport'>
		<link rel="stylesheet" href="css/estilos.css">
	</HEAD>
	
	<body>
		<div class="form-box" id="login/box">
			<div class="header">Registro de Evento.</div>
			<form action="registrar_evento.php" method="post">
				<div class="body bg-gray">
					<div class="form-group">
						<input type="text" name="nombre_evento" class="form-control" placeholder="Nombre del evento"/>
					</div>
					<div>
						<input type="text" name="fecha_evento" class="form-control" placeholder="Fecha del evento yy/mm/dd"/>
					</div>
					<div>
						<input type="text" name="costo_evento" class="form-control" placeholder="Costo del evento $"/>
					</div>
				</div>
				<div>
					<button id="btnregistrar_e" type="submit" class="btn bg-olive btn-block" >Registrar</button>
				</div>
			</form>
		</div>
	</body>	
	
</html>
