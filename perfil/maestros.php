	<?php
		include "../php/maestros/maestro.php";
		include "../php/grado/grado.php";
		$grado = new grado;
		$grado = $grado->getGrado();
		$maestro = new maestro;	
		$maestro = $maestro->getMaestro();
		$maestro_a = new maestro;
		
		$id = isset($_GET['id'])?$_GET['id']:NULL;
		$maestro_a = $maestro_a->getMaestroById($id);
		$id            = '';
		$nombres 	   = '';
		$apellidos	   = '';
		$cedula        = '';
		$correo        = '';
		$nacimiento    = '';
		$direccion     = '';

		if ($maestro_a) {
			$id      	      = $maestro_a[0]['id_maestro'];
			$nombres          = $maestro_a[0]['nombres'];
			$apellidos        = $maestro_a[0]['apellidos'];
			$cedula           = $maestro_a[0]['cedula'];
			$correo     	  = $maestro_a[0]['correo'];
			$nacimiento       = $maestro_a[0]['nacimiento'];
			$direccion     	  = $maestro_a[0]['direccion'];
		}
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
	

	<div class="modal fade" id="ventana4">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="../php/grado/grado_controler.php" method="POST" id="registro2" name ="registro2">
							<div class="col-md-12">
								<div class="form-group">
								<label> Grado</label>
								<select class = "form-control" name = "grado">
									<option value = "1er Grado">1er Grado </option>
									<option value = "2do Grado">2do Grado </option>
									<option value = "3er Grado">3er Grado </option>
									<option value = "4to Grado">4to Grado </option>
									<option value = "5to Grado">5to Grado </option>
									<option value = "6to Grado">6to Grado </option>
								</select>			
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Seccion</label>
								<select class = "form-control" name = "seccion">
									<option value = "Seccion A">Seccion A</option>
									<option value = "Seccion B">Seccion B</option>
									<option value = "Seccion C">Seccion C</option>
									<option value = "Seccion D">Seccion D</option>
									<option value = "Seccion E">Seccion E</option>
									<option value = "Seccion U">Seccion U</option>

								</select>	
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Maestro</label>
								<select class = "form-control" name = "maestro">
								<?php foreach ($maestro as $key => $value) {?>
									<option value = "<?=$value['nombres'] .' ' .$value['apellidos'];?>"><?= $value['nombres'] ." " .$value['apellidos'];?></option>
								<?php } ?>
								</select>
							</div>
							</div>
							<input type="submit" name="crear" class="btn btn-info btn-block" value="Ingresar">
							</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	<div class="modal fade" id="ventana">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="../php/maestros/maestro_controler.php" method="POST" id="registro2" name ="registro2">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?=$nombres?>" style="color: black !important;" required>
					
								<input type="text" name="id_m" class="form-control" placeholder="Nombre" value="<?=$id?>" style="display: none;" >
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" value="<?=$apellidos?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedula" value="<?=$cedula?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Correo <STRONG>(solo minusculas).</STRONG></label>
								<input type="text" name="correo" id="correo" class="form-control" placeholder="example@example.com" value="<?=$correo?>" style="color: black !important;" required>
							</div>
							</div>
						
							<div class="col-md-12">
							<div class="form-group">
								<label>Fecha de naciomiento</label>
								<input type="date" name="nacimiento" id="servicio" class="form-control" placeholder="1990" value="<?=$nacimiento?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Direccion</label>
								<textarea class="form-control" placeholder="Direccion"  name="direccion" style="max-height: 80px; min-height: 80px; color: black !important;" required><?=$direccion?></textarea>
							</div>
							</div>
							<input type="submit" name="editar" class="btn btn-info btn-block" value="Ingresar">
							</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

	<div class="modal fade" id="ventana2">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="../php/maestros/maestro_controler.php" method="POST" id="registro1" name ="registro1">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedula" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Correo <STRONG>(solo minusculas).</STRONG></label>
								<input type="text" name="correo" id="correo" class="form-control" placeholder="example@example.com" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Años de servicio</label>
								<input type="number" name="aos_s" id="servicio" class="form-control" placeholder="1990" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Fecha de naciomiento</label>
								<input type="date" name="servicio" id="servicio" class="form-control" placeholder="1990" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Direccion</label>
								<textarea class="form-control" placeholder="Direccion" name="direccion" style="max-height: 80px; min-height: 80px; color: black !important;" required></textarea>
							</div>
							</div>
						
							<input type="submit" name="crear" class="btn btn-info btn-block" value="Ingresar">
							</form><br>
							<div id="ddd" style="margin: auto;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
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
								<th>SERVICIO</th>
								<th>OPCION</th>				
							</tr>
								<?php  $i = 0;
					if (count($maestro)>0) {
						foreach ($maestro as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><a href="?id=<?=$value['id_maestro'];?>"><?php echo $value['nombres'];?></a></td>
							<td><?php echo $value['apellidos'];?></td>
							<td><?php echo $value['cedula'];?></td>
							<td><?php echo $value['correo'];?></td>
							<td><?php echo $value['nacimiento'];?></td>
							<td><?php echo (date('Y') - $value['servicio']);?></td>
							<td><a href="../php/maestros/maestro_controler.php?id=<?=$value['id_maestro'];?>&delete" class="btn btn-warning">ELIMINAR</a></td>
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>

					</table>
				<a href="#ventana" class="btn btn-info" data-toggle="modal" style="display: inline-block;" ><span class="icon-user-plus"></span> Ingresar Maestro</a>
				<?php if (isset($_GET['id'])) { ?>
					<span style="float: right;"><?=$nombres?>:
				<a href="#ventana" class="btn btn-danger" data-toggle="modal" style="display: inline-block; " ><span class="icon-user-plus"></span> Editar</a></span>
				<?php } ?>
			</div>
			<?php include "../php/acceso.php"; ?>
			<div class="wall-p">
					<div class="title-m">
					<h2>GRADOS</h2>	
					<hr class="stylerf">
					<table class="table table-striped table-bordered table-hover">
							<tr class="bg-pboots">
								<th>GRADO</th>
								<th>SECCION</th>
								<th>MAESTRO</th>
								<th>OPCION</th>

			
							</tr>
								<?php  $i = 0;
					if (count($grado)>0) {
						foreach ($grado as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><a href="?id=<?=$value['id_grado'];?>"><?php echo $value['grado'];?></a></td>
							<td><?php echo $value['seccion'];?></td>
							<td><?php echo $value['maestro'];?></td>
							<td><a href="../php/grado/grado_controler.php?id=<?=$value['id_grado'];?>&delete" class="btn btn-warning">ELIMINAR</a></td>
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>

					</table>
					
				
			</div>
				<a href="#ventana4" class="btn btn-success" data-toggle="modal" style="display: inline-block;" ><span class="icon-user-plus"></span> Ingresar Grado</a>
				<?php if (isset($_GET['id'])) { ?>
					<span style="float: right;"><?=$nombres?>:
				<a href="#ventana" class="btn btn-danger" data-toggle="modal" style="display: inline-block; " ><span class="icon-user-plus"></span> Editar</a></span>
				<?php } ?>
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
	<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript">
var formulario1 = document.getElementById('registro1');
var fdd = document.getElementById('ddd');
var expresion = /\w+@\w+\.+[a-z]/;
(function () {
function nombre(ev) {
	 if (formulario1.nombre.value.length < 3) {
		fdd.innerHTML += "<div class='alert alert-danger'><span class='close' data-dismiss = 'alert'>&times;</span> EL NOMBRE DEBE TENER MAS DE 3 LETRAS</strong></div><br>";
		ev.preventDefault();
	}
}

function apellido(ev) {
	if (formulario1.apellido.value.length < 3) {
		fdd.innerHTML += "<div class='alert alert-danger'><span class='close' data-dismiss = 'alert'>&times;</span> EL APELLIDO DEBE TENER MAS DE 3 LETRAS</strong></div><br>"
		ev.preventDefault();
	}
}
function correo(ev) {
	if (!expresion.test(formulario1.correo.value)) {
		fdd.innerHTML += "<div class='alert alert-danger'><span class='close' data-dismiss = 'alert'>&times;</span> EL CORREO INGRESADO NO ES VALIDO</strong></div><br>"
		ev.preventDefault();
	}
}
function cedula(ev) {
	 if (isNaN(formulario1.cedula.value)) {
		fdd.innerHTML += "<div class='alert alert-danger'><span class='close' data-dismiss = 'alert'>&times;</span> SOLO SE PERMITEN NUMEROS EN EL CAMPO CEDULA</strong></div><br>"
		ev.preventDefault();
	}
	else if (formulario1.cedula.value.length < 5) {
		fdd.innerHTML += "<div class='alert alert-danger'><span class='close' data-dismiss = 'alert'>&times;</span> ESCRIBA SU CEDULA COMPLETA</strong></div><br>"
		ev.preventDefault();
	}
	
}
function direccion(ev) {
	 if (formulario1.direccion.value.length < 6) {
		fdd.innerHTML += "<div class='alert alert-danger'><span class='close' data-dismiss = 'alert'>&times;</span> ESCRIBA SU DIRECCION COMPLETA</strong></div><br>"
		ev.preventDefault();
	}
	
}
function validar(ev) {
	nombre(ev);
	apellido(ev);
	correo(ev);
	cedula(ev);	
	direccion(ev)
}
formulario1.addEventListener('submit', validar);
}())
</script>
</body>
</html>
