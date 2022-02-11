	<?php 		include "php/users/users.php";
		$users = new users();
		$id    = isset($_GET['id'])?$_GET['id']:NULL;
		$users = $users->getUserByCed($id);
			$iden 			= $users[0]['iden_us'];
			$validar 		= $users[0]['activacion'];
			$pregunta1      = $users[0]['pregunta1'];
			$pregunta2      = $users[0]['pregunta2'];
			$pregunta3      = $users[0]['pregunta3'];
		?>
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

	<main style="width: 100%;">
		<div class="back">
			<a href="index.php"><<</a>
		</div>
		<dir class="login">
			<div class="login-container">
				<div class="login-main">
					<div class="login-title">
						<h2>RECUPERAR CONTRASEÑA</h2>
					</div>
					<div class="req">
						*Ingresa tus datos para recuperar la contraseña*
					</div>
					
					<form action="php/users/user_controler.php" method="POST">
						<div class="cont-in">
							<input type="text" name="iden" placeholder="Respuesta" style="display: none;" value="<?=$iden?>">
							<label><?php echo $pregunta1;?></label>
							<input type="text" name="respuesta1" placeholder="Respuesta">
						</div>
						<div class="cont-in">
							<label><?php echo $pregunta2;?></label>
							<input type="text" name="respuesta2" placeholder="Respuesta">
						</div>
						<div class="cont-in">
							<label><?php echo $pregunta3;?></label>
							<input type="text" name="respuesta3" placeholder="Respuesta">
						</div>
						<div class="cont-in">
							<label>Contraseña Nueva</label>
							<input type="password" name="pass" placeholder="Password">
						</div>
						<div class="cont-ina">
							
							<input type="submit" name="recuperar1" class="btn-sub" value="INGRESAR">
						</div>
					</form>

				</div>
				
			</div>
		</dir>
	</main>
<script type="text/javascript">

		
</script>


</body>
</html>
