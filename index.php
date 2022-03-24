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
		<div class="modal fade" id="ventana">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LO SIGUIENTE</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="php/users/user_controler.php" method="GET" id="registro1" >
							<div class="col-md-12">
								<div class="form-group">
								<label> Cedula</label>
								<input type="number" maxlength = "20"  name="cedula" id="Cedula" class="form-control" placeholder="Cedula" style="color: black !important;" required>
							</div>
							</div>
							<input type="submit" name="recuperar" class="btn btn-info btn-block" value="Ingresar">
							</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<div class="loader hidden">
			Please Wait...
		</div>

	<main style="width: 100%;">
	
		<dir class="login">
			<div class="login-container">
				<div class="login-main">
					<div class="login-title">
						<h2>LOGIN</h2>
					</div>
					<div class="req">
						*Ingresa tu Usuario Y Contraseña para Acceder*
					</div>
					
					<form action="php/users/user_controler.php" method="POST">
						<div class="cont-in">
							<label>USUARIO</label>
							<input type="text" name="usuario" placeholder="Usuario" maxlength = "40">
						</div>
						<div class="cont-in">
							<label>CONTRASEÑA</label>
							<input type="password" name="pass" placeholder="Contraseña" maxlength = "20">
						</div>
						<a href="#ventana" data-toggle="modal">Recuperar contraseña</a>
						<div class="cont-ina">

							<input type="submit" name="validar" class="btn-sub" value="INGRESAR">
							<div class="login-btn">
							<a href="registro.php">REGISTRO</a>	
						</div>
						</div>
						<?php include "php/acceso.php"; ?>
					</form>

				</div>
				
			</div>
		</dir>
	</main>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
