<?php
		include "../php/users/users.php";
		$user = new users;
        $user = $user->getUser();		
?>

	<?php
	
		session_start();
		if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ' ') {
			header('location: ../index.php');
		}
		if ($_SESSION['cuenta'] != 'administrador') {
			header('location: inicio.php');
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
		<link rel="stylesheet" type="text/css" href="../css/icofont.css"> 
		<link rel="shortcut icon" href="img/madara-eternal.ico">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<style type="text/css">
			.date-p{
				float: right;
				font-size: 15px;
				color: grey;
			}
			.tag-p{
				color: red;
				font-size: 20px;
				float: left;
			}
			.org-p{
				margin-top: 12px;
				margin-bottom: 12px;
				width: 100%;
				border: 1px solid gray;
				padding: 10px;
				display: flex;
				background-color: white;
				transition: 300ms all ease;
			}
		</style>
	</head>

	<div class="loader hidden">
			<img src="../img/escuela-y-colegio-imagen-animada-0047.gif">
			Please Wait...
		</div>
	<body style="background-color: rgba(0,0,0,0.2);">
			



	<?php include "../php/acceso2.php"; ?>
			
		</header>
		<main class="container" style="display: flex; background-color: rgba(0,0,0,0); flex-wrap:wrap;">

			<div class="wall-p">
					<div class="title-m">
					<h2>MAESTROS</h2>	
					
				<hr class="stylerf">
			</div>
		
								<table class="table table-striped table-bordered table-hover">
							<tr class="bg-pboots">
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>CEDULA</th>
								<th>CORREO</th>
								<th>NACIMIENTO</th>
                                <th>CUENTA</th>
								<th>OPCION</th>				
							</tr>
								<?php  $i = 0;
					if (count($user)>0) {
						foreach ($user as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><a href="?id=<?=$value['id'];?>"><?php echo $value['nombres'];?></a></td>
							<td><?php echo $value['apellidos'];?></td>
							<td><?php echo $value['cedula'];?></td>
							<td><?php echo $value['correo'];?></td>
							<td><?php echo $value['nacimiento'];?></td>
							<td><?php echo $value['tipo_usu'];?></td>

							<td><a href="../php/users/user_controler.php?id=<?=$value['id'];?>&cambiar_usu&usu=<?=$value['tipo_usu'];?>" class="btn btn-warning">CAMBIAR TIPO</a></td>
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>

					</table>
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
	<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>