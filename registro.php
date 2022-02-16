	<!DOCTYPE html>

	<html>

	<head>
		<title>TheThing</title>
		<meta charset="utf-8">
		<meta name = "description" content="">
		<meta name= "keywords" content="">
		<meta name= "author" content="">
		<link rel="stylesheet" type="text/css" href="css/estilos.css"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
		<link rel="shortcut icon" href="img/madara-eternal.ico">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	</head>
<body>
		<div class="loader hidden">
		
			Please Wait...
		</div>

	<main style="width: 100%;">asdadada
		<div class="back">
			<a href="index.php"><<</a>
		</div>
		<dir class="login">
			<div class="login-container">
				<div class="login-main">
					<div class="login-title">
						<h2>REGISTRO</h2>
					</div>
					<div class="req">
						*Ingresa los Datos para Registrarte*
					</div>
					
					<form action="php/users/user_controler.php" method="POST">
						<div class="cont-in">
							<label>USUARIO</label>
							<input type="text" name="usuario" placeholder="Usuario" required>
						</div>
						<div class="cont-in">
							<label>CONTRASEÑA</label>
							<input type="password" name="pass" placeholder="Contraseña" required>
						</div>
							<div class="cont-in">
							<label>CEDULA</label>
							<input type="number" name="cedula" placeholder="Cedula" required>
						</div>
						<div class="cont-in">
							<label>CORREO</label>
							<input type="email" name="correo" placeholder="Correo" required>
						</div>
						
						<div class="cont-ina">
							<input type="submit" name="crear" class="btn-sub" value="INGRESAR">
						</div>
					</form>

				</div>
				
			</div>
		</div>
	</main>
<script type="text/javascript">
		
</script>


</body>
</html>
