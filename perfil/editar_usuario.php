
	<?php
		session_start();
		require "../php/users/users.php";
		$user = new users();
		$securi = new users();
		$user = $user->getUserById();
		$securi = $securi->getSecByIden();	
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
		<meta charset="UTF-8">
		<meta name = "description" content="">
		<meta name= "keywords" content="">
		<meta name= "author" content="">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
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
			
			Please Wait...
		</div>
	<body style="background-color: rgba(0,0,0,0.2);">
			

	<?php include "../php/acceso2.php"; ?>

	
		<main class="container" style="background-color: rgba(0,0,0,0);">

			<div class="wall-p" >	
				<div class="prin-tit">
					<h2>DATOS DE USUARIO</h2>
					<hr class="stylerf">
				</div>
				<div style="display: flex;">
				<div class="imagen">
					<img src="../php/users/<?=$user[0]['imagen_us'];?>">
					
				</div>
				<div class="dat-usuario">
					<h3>PERSONALES</h3>
					<hr>
					<ul>
						<li><span style="color: red;">NOMBRE: </span> <?=$user[0]['nombres'];?></li>
						<li><span style="color: red;">APELLIDOS:</span>  <?=$user[0]['apellidos'];?></li>
						<li><span style="color: red;">FECHA DE NACIMIENTO:</span>  <?=$user[0]['nacimiento'];?></li>
						<li><span style="color: red;">USUARIO:</span>  <?=$user[0]['usuario'];?></li>
						<li><span style="color: red;">CORREO:</span>  <?=$user[0]['correo'];?></li>

					</ul><br>		<?php if (!isset($securi[0]['pregunta1'])) {

						} else{ ?>
					<h3>SEGURIDAD</h3>
						<hr>
				

					<ul>
						<li><span style="color: red;"><?=$securi[0]['pregunta1'];?>: </span><?=$securi[0]['respuesta1'];?></li>
						<li><span style="color: red;"><?=$securi[0]['pregunta2'];?>: </span><?=$securi[0]['respuesta2'];?></li>
						<li><span style="color: red;"><?=$securi[0]['pregunta3'];?>: </span><?=$securi[0]['respuessta3'];?></li>
						
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
					<div class="wall-p" >	
				<div class="prin-tit">
					<h2>EDITAR USUARIO</h2>
					<hr class="stylerf">
				</div>
				<div style="display: flex;">
				<div class="dat-usuario">
				<form action="../php/users/user_controler.php" method="POST" id="registro1" name ="registro1" enctype="multipart/form-data">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" maxlength = "20" id="nombre" class="form-control" placeholder="Nombre" value="<?=$user[0]['nombres'];?>" style="color: black !important;">
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" maxlength = "20" id="apellido" class="form-control" placeholder="Apellido" value="<?=$user[0]['apellidos'];?>" style="color: black !important;">
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" maxlength = "20" id="cedula" class="form-control" placeholder="Cedula" value="<?=$user[0]['cedula'];?>" style="color: black !important;">
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Correo <STRONG>(solo minusculas).</STRONG></label>
								<input type="text" name="correo" maxlength = "30" id="correo" class="form-control" value="<?=$user[0]['correo'];?>" placeholder="example@example.com" style="color: black !important;">
							</div>
							</div>

					
							</div>
							<div class="dat-usuario">
								<div class="col-md-12">
							<div class="form-group">
								<label>Fecha de naciomiento</label>
								<input type="date" name="nacimiento" id="servicio" class="form-control" placeholder="1990" value="<?=$user[0]['nacimiento'];?>" style="color: black !important;">
							</div>
							</div>
						
											<div class="col-md-12">
							<div class="form-group">
								<label>usuario</label>
								<input type="text" name="usuario" id="usuario" maxlength = "20" class="form-control" value="<?=$user[0]['usuario'];?>" placeholder="usuario" style="color: black !important;">
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>password</label>
								<input type="password" name="pass" id="pass" maxlength = "20" class="form-control" value="<?=$user[0]['pass'];?>" placeholder="password" style="color: black !important;">
							</div>
							</div>
								<div class="col-md-12">
							<div class="form-group">
								<label>Imagen</label>
								<input type="file" name="imagen" class="form-control" >
							</div>
							</div>
						
							</div>
											
			</div>	<input type="submit" name="editar" class="btn btn-info btn-block" value="Editar" style="width: 50%; margin: auto;"></form>

		</div>
	</div>
				<div class="wall-p" >	
				<div class="prin-tit">
					<h2>PREGUNTAS DE SEGURIDAD</h2>
					<hr class="stylerf">
				</div>
				<div style="display: flex;">
				<div class="dat-usuario">
				<form action="../php/users/user_controler.php" method="POST" id="registro1" name ="registro1" enctype="multipart/form-data">
							<div class="col-md-12">
								<div class="form-group">
								<label> Pregunta Numero 1</label>
							<select class="form-control" name="pregunta1">
								<option value="¿Nombre de tu primer hijo?">¿Nombre de tu primer hijo?</option>
								<option value="¿Nombre de tus padres?">¿Nombre de tus padres?</option>
								<option value="¿Marca de tu primer auto?">¿Marca de tu primer auto?</option>
								<option value="¿Nombre de tu mascota?">¿Nombre de tu mascota?</option>
								<option value="¿Color favorito?">¿Color favorito?</option>
								<option value="¿Comida favorita?">¿Comida favorita?</option>
							</select>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Pregunta Numero 2</label>
								<select class="form-control" name="pregunta2">
								
								<option value="¿Nombre de tus padres?">¿Nombre de tus padres?</option>
								<option value="¿Marca de tu primer auto?">¿Marca de tu primer auto?</option>
								<option value="¿Nombre de tu mascota?">¿Nombre de tu mascota?</option>
								<option value="¿Color favorito?">¿Color favorito?</option>
								<option value="¿Comida favorita?">¿Comida favorita?</option>
								<option value="¿Nombre de tu primer hijo?">¿Nombre de tu primer hijo?</option>
							</select>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Pregunta Numero 3</label>
								<select class="form-control" name="pregunta3">				
									<option value="¿Marca de tu primer auto?">¿Marca de tu primer auto?</option>
									<option value="¿Nombre de tu mascota?">¿Nombre de tu mascota?</option>
									<option value="¿Color favorito?">¿Color favorito?</option>
									<option value="¿Comida favorita?">¿Comida favorita?</option>
									<option value="¿Nombre de tu primer hijo?">¿Nombre de tu primer hijo?</option>
									<option value="¿Nombre de tus padres?">¿Nombre de tus padres?</option>
							</select>
							</div>
							</div>	
							</div>
							<div class="dat-usuario">
								<div class="col-md-12">
							<div class="form-group">
								<label>Respuesta Numero 1</label>
								<input type="password" name="respuesta1" maxlength = "20" id="servicio" class="form-control" placeholder="Respuesta1" style="color: black !important;">
							</div>
							</div>
						
											<div class="col-md-12">
							<div class="form-group">
								<label>Respuesta Numero 2</label>
								<input type="password" name="respuesta2" maxlength = "20" id="usuario" class="form-control" value="" placeholder="Respuesta2" style="color: black !important;">
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Respuesta Numero 3</label>
								<input type="password" name="respuesta3" maxlength = "20" id="pass" class="form-control" value="" placeholder="Respuesta3" style="color: black !important;">
							</div>
							</div>
							
						
							</div>
											
			</div>	<center>
				<div class="form-group" style="width: 50%; text-align: center;">
								<label>CONTRASEÑA</label>
								<input type="password" name="pass" id="pass" maxlength = "20" class="form-control" value="" placeholder="Contraseña" style="color: black !important;">
							</div>
						</center>
							<input type="submit" name="editar_p" class="btn btn-warning btn-block"  style="width: 50%; margin: auto;"></form>

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
<script type="text/javascript">
 window.addEventListener('load',function (){
    var id = "r";
    miFuncion(id);
  });
  
  function miFuncion(id_variable) {
    let variable = document.getElementsByClassName(id_variable).length;
    let l = document.getElementsByClassName('tag-p');
    for (var i = 0; i <= variable; i++) {
    	if (l[i] == "REALIZADA") {
    		l[i].style.color = "blue";
    	}
    	else{
    		l[i].style.color = "red";
    	}
    	
    }
  }
	
</script>

</body>
</html>
