<!DOCTYPE html>
<html lang="es-MX">
	
	<HEAD>
		<meta charset="utf8">
		<title>Registro de Participantes.</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'name='viewport'>
		<link rel="stylesheet" href="css/estilos.css">
	</HEAD>
	
	<body>
		<div class="form-box" id="login/box">
			<div class="header">Registro de Participantes.</div>
			<form action="registrar_usuarios.php" method="post">
				<div class="body bg-gray">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre(s)"/>
					</div>
					<div>
						<input type="text" name="a_paterno" class="form-control" placeholder="Apellido Paterno"/>
					</div>
					<div>
						<input type="text" name="a_materno" class="form-control" placeholder="Apellido Materno"/>
					</div>
					<div>
						<input type="text" name="grupo" class="form-control" placeholder="Grupo"/>
					</div>
					<div>
						<input type="text" name="evento" class="form-control" placeholder="Evento"/>
					</div>
				</div>
				<div>
					<button id="btnregistrar" type="submit" class="btn bg-olive btn-block" >Registrar</button>
				</div>
			</form>
		</div>
	</body>	
	
</html>
