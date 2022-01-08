<?php
			session_start();
		if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ' ') {
			header('location: ../index.php');
		}
		if (isset($_GET['logout'])) {
			session_destroy();
			header('location: ../index.php');
		}
	
?>
	<!DOCTYPE html>

	<html>

	<head>
		<title>TheThing</title>
		<meta charset="utf-8">
		<meta name = "description" content="">
		<meta name= "keywords" content="">
		<meta name= "author" content="">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
		<link rel="shortcut icon" href="img/madara-eternal.ico">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<style type="text/css">
		
			textarea{
				height: 120px;
				width: 100%;
			}
			.titulo{

				width: 92%;
				height: 47px;

			}
		</style>
	</head>
	<div class="loader hidden">
			<img src="../img/escuela-y-colegio-imagen-animada-0047.gif">
			Please Wait...
		</div>
	<body style="background-color: rgba(0,0,0,0.2);">
			
	<?php include "../php/acceso2.php"; ?>
		<main class="container" style="display: flex; background-color: rgba(0,0,0,0);">
			<div class="tabla-emp">
				<div class="title-m">
					<h2>TABLA DE EMPLEADOS</h2>
				</div>
				<div class="tabla">
					<div class="table-responsive scroll">
					<table class="table table-striped table-bordered">
							<tr class="bg-pboots">
								<th>ID</th>
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>C.I</th>
								<th>FUNCION</th>
							</tr>
						
						<tr class="bg-pboots">
							
							<td>fdsfs</td>
							<td>sadasd</td>
							<td>adsda</td>
							<td>asdasd</td>
							<td>dasa</td>
						</tr>
			
					</table>
					</div>
				</div>
			</div>
		</main>

			<footer>
				<div class="separador">
					<div class="principal">
						<h4>REDES SOCIALES:</h4>
						<ul style="font-size: 20px;">
							<li><span class="icon-social-facebook"></span></li>
							<li><span class="icon-social-twitter"></span></li>
							<li><span class="icon-social-tumbler"></span></li>
						</ul>
					</div>
					<div class="aside">
						<h4>POTENCIADO CON:</h4>
						<ul>
							<li><h3>Jquery</h3></li>
							<li><h3>Bootstrap</h3></li>
							<li><h3>Sharts</h3></li>
							<li><h3>Fpdf</h3></li>
						</ul>
					</div>
				</div>
				
			</footer>


</body>
</html>
