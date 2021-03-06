<?php
		include "../php/estudiantes/estudiante.php";
		include "../php/grado/grado.php";
		$estudiantes = new estudiante;
		$grado = new grado;
		$grado = $grado->getGrado();
		
		
		if(isset($_GET['id'])){
			$vacuna = $estudiantes->getVacunaById($_GET['id']);
			$nombrevacuna = $estudiantes->getVacuna();

			$estudiant = $estudiantes->getEstudianteById($_GET['id']);
		}
	
		if (isset($_POST['buscar'])) {
			$busqueda = $_POST['buscar'];
			$estudiante = $estudiantes->buscarEstudiantes($busqueda);
		}
		else{
			$estudiante = $estudiantes->getEstudiante();
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
	
	<div class="modal fade" id="ventana5">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="../php/representante/representante_controler.php" method="POST" id="registro2" name ="registro2">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" maxlength = "20" id="nombre" class="form-control" placeholder="Nombre"  style="color: black !important;" required>
					
								<input type="text" name="id_m" class="form-control" value = "<?=$_GET['id']?>" placeholder="Nombre"  style="display: none;" >
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" maxlength = "20" id="apellido" class="form-control" placeholder="Apellido"  style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" id="cedula"  maxlength = "20" class="form-control" placeholder="Cedula" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Correo <STRONG>(solo minusculas).</STRONG></label>
								<input type="text" name="correo" id="correo" maxlength = "30" class="form-control" placeholder="example@example.com" style="color: black !important;" required>
							</div>
							</div>
						
							<div class="col-md-12">
							<div class="form-group">
								<label>Telefono</label>
								<input type="number" maxlength = "20" name="telefono" id="servicio" class="form-control" placeholder="0412-" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Direccion</label>
								<textarea class="form-control" placeholder="Direccion"  name="direccion" style="max-height: 80px; min-height: 80px; color: black !important;" required></textarea>
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
		<div class="modal fade" id="ventana9">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="../php/estudiantes/estudiante_controler.php" method="POST" id="registro2" name ="registro2">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" maxlength = "20" id="nombre" class="form-control" placeholder="Nombre" value="<?=$estudiant[0]['nombre_rep']?>" style="color: black !important;" required>
					
								<input type="text" name="id_m" class="form-control" placeholder="Nombre" value="<?=$_GET['idl']?>" style="display: none;" >
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" maxlength = "20" id="apellido" class="form-control" placeholder="Apellido" value="<?=$estudiant[0]['apellido_rep']?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" maxlength = "20" id="cedula" class="form-control" placeholder="Cedula" value="<?=$estudiant[0]['cedula_rep']?>" style="color: black !important;" required>
							</div>
							</div>
					
							<div class="col-md-12">
							<div class="form-group">
								<label>Correo</label>
								<input type="email" name="correo" id="servicio" class="form-control" placeholder="1990" value="<?=$estudiant[0]['correo_rep']?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Telefono </label>
								<input type="number" name="telefono" id="servicio" class="form-control" placeholder="0412-" value="<?=$estudiant[0]['telefono_rep']?>" style="color: black !important;" required>
							</div>
							</div>
							<input type="submit" name="editar_rep" class="btn btn-info btn-block" value="Ingresar">
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
							<form action="../php/estudiantes/estudiante_controler.php" method="POST" id="registro2" name ="registro2">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" maxlength = "20" id="nombre" class="form-control" placeholder="Nombre" value="<?=$estudiant[0]['nombres']?>" style="color: black !important;" required>
					
								<input type="text" name="id_m" class="form-control" placeholder="Nombre" value="<?=$_GET['id']?>" style="display: none;" >
							
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" maxlength = "20" id="apellido" class="form-control" placeholder="Apellido" value="<?=$estudiant[0]['apellidos']?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" maxlength = "20" id="cedula" class="form-control" placeholder="Cedula" value="<?=$estudiant[0]['cedula']?>" style="color: black !important;" required>
							</div>
							</div>
					
							<div class="col-md-12">
							<div class="form-group">
								<label>Fecha de naciomiento</label>
								<input type="date" name="nacimiento" id="servicio" class="form-control" placeholder="1990" value="<?=$estudiant[0]['nacimiento']?>" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Grado </label>
								<select class = "form-control" name = "grado">
								<?php foreach ($grado as $key => $value) {?>
									<option value = "<?=$value['grado'] .' ' .$value['seccion'];?>"><?= $value['grado'] ." " .$value['seccion'];?></option>
								<?php } ?>
								</select>
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
		<div class="modal fade" id="ventana6">
		<button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
		<div class="col-md-5" style="margin: auto;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
						
						
					</div>
					<div class="modal-body">
						<div class="container">
							<form action="../php/estudiantes/estudiante_controler.php" method="POST" id="registro1" name ="registro1">
							<input type="text" name="id" value="<?=$_GET['id']?>"  class="form-control" placeholder="Nombre" style="color: black !important; display:none;">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre de la vacuna</label>
								<label>Grado </label>
								<select class = "form-control" name = "nombre_vacuna">
								<?php foreach ($nombrevacuna as $key => $value) {?>
									<option value = "<?=$value['nombvacuna']?>"><?= $value['nombvacuna']?></option>
								<?php } ?>
								</select>
								
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Primera dosis</label>
								<input type="date" name="primera_dosis" maxlength = "20"   id="apellido" class="form-control" placeholder="Apellido" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre de la vacuna</label>
								
								<select class = "form-control" name = "nombre_vacuna2">
								<?php foreach ($nombrevacuna as $key => $value) {?>
									<option value = "<?=$value['nombvacuna']?>"><?= $value['nombvacuna']?></option>
								<?php } ?>
								</select>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Segunda dosis</label>
								<input type="date" name="segunda_dosis" maxlength = "20" id="cedula" class="form-control" placeholder="Cedula" style="color: black !important;" >
							</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre de la vacuna</label>
								<select class = "form-control" name = "nombre_vacuna3">
							<?php foreach ($nombrevacuna as $key => $value) {?>
									<option value = "<?=$value['nombvacuna']?>"><?= $value['nombvacuna']?></option>
								<?php } ?>
								</select>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Tercera dosis</label>
								<input type="date" name="tercera_dosis" maxlength = "20"  class="form-control" placeholder="Cedula" style="color: black !important;" >
							</div>
							</div>
						
							<input type="submit" name="crear_vacuna" class="btn btn-info btn-block" value="Ingresar">
							</form><br>
							<div id="ddd" style="margin: auto;"></div>
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
							<form action="../php/estudiantes/estudiante_controler.php" method="POST" id="registro1" name ="registro1">
							<div class="col-md-12">
								<div class="form-group">
								<label> Nombre</label>
								<input type="text" name="nombre" maxlength = "20" id="nombre" class="form-control" placeholder="Nombre" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Apellido</label>
								<input type="text" name="apellido" maxlength = "20"   id="apellido" class="form-control" placeholder="Apellido" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Cedula</label>
								<input type="text" name="cedula" maxlength = "20" id="cedula" class="form-control" placeholder="Cedula" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Fecha de nacimiento</label>
								<input type="date" name="nacimiento" maxlength = "20"  class="form-control" placeholder="Cedula" style="color: black !important;" required>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>Grado </label>
								<select class = "form-control" name = "grado">
								<?php foreach ($grado as $key => $value) {?>
									<option value = "<?=$value['grado'] .' ' .$value['seccion'];?>"><?= $value['grado'] ." " .$value['seccion'];?></option>
								<?php } ?>
								</select>
							</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
								<label>SEXO </label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value = "Masculino">
  								<label class="form-check-label" for="flexRadioDefault1">
   								MASCULINO
  								</label>
							</div>
							<div class="form-check">
  								<input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2" checked value="Femenino">
								  <label class="form-check-label" for="flexRadioDefault2">
   									FEMENINO
  								</label>
							</div>
								</div></div>
						
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
			Please Wait...
		</div>
	<body style="background-color: rgba(0,0,0,0.2);">
	<?php include "../php/acceso2.php"; ?>		
		</header>
		<main class="container" style="display: flex; background-color: rgba(0,0,0,0); flex-wrap:wrap;">

			<div class="wall-p">
					<div class="title-m">
					<h2>ESTUDIANTES</h2>	
					
				<hr class="stylerf">
			</div>
		<form action = "" method = "POST">
			<input type = "text" name = "buscar" class="form-control" placeholder="BUSCAR ESTUDIANTE">
		</form>
								<table class="table table-striped table-bordered table-hover">
							<tr class="bg-pboots">
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>CEDULA</th>
								<th>GRADO</th>
								<th>EDAD</th>
								<th>SEXO</th>
								<th>OPCION</th>						
							</tr>
								<?php  $i = 0;
					if (count($estudiante)>0) {
						foreach ($estudiante as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><a href="?id=<?=$value['id_estudiante'];?>"><?php echo $value['nombres'];?></a></td>
							<td><?php echo $value['apellidos'];?></td>
							<td><?php echo $value['cedula'];?></td>
							<td><?php echo $value['grado'];?></td>
							<td><?php echo (date('Y') - $value['nacimiento']);?> A??os</td>
							<td><?php echo $value['sexo'];?></td>	
							<td><a href="../php/estudiantes/estudiante_controler.php?id=<?=$value['id_estudiante'];?>&delete" class="btn btn-warning">ELIMINAR</a></td>
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>
					</table>
				<a href="#ventana2" class="btn btn-info" data-toggle="modal" style="display: inline-block;" ><span class="icon-user-plus"></span> Ingresar Estudiante</a>
				<?php if(isset($_POST['buscar'])){?>
				<a href="informe.php?buscar=<?=$_POST['buscar']?>" class="btn btn-danger"  style="display: inline-block; " ><span class="icon-user-plus"></span> PDF</a></span>
				<?php }else{ ?>
					<a href="informe.php?buscar=<?=$_POST['buscar']?>" class="btn btn-danger"  style="display: inline-block; " ><span class="icon-user-plus"></span> PDF</a></span>
					<?php } ?>
				<?php if (isset($_GET['id'])) { ?>
					<span style="float: right;"><?=$estudiant[0]['nombres'] ." " .$estudiant[0]['apellidos']?>:
					
				<a href="#ventana" class="btn btn-info" data-toggle="modal" style="display: inline-block;" ><span class="icon-user-plus"></span> Editar</a></span>
				<a href="#ventana5" class="btn btn-danger" data-toggle="modal" style="display: inline-block; " ><span class="icon-user-plus"></span> Agregar Representante</a></span>
				<a href="#ventana6" class="btn btn-warning" data-toggle="modal" style="display: inline-block; " ><span class="icon-user-plus"></span> Agregar Vacunacion</a></span>
				<?php } ?>
			</div>

			<?php include "../php/acceso.php"; if (isset($_GET['id']) && isset($estudiant[0]['correo_rep'])) { ?>
			<div class="wall-p">
					<div class="title-m">
					<h2>REPRESENTANTES DE <?=$estudiant[0]['nombres'] ." " .$estudiant[0]['apellidos']?> </h2>	
					
				<hr class="stylerf">
			</div>
		
								<table class="table table-striped table-bordered table-hover">
							<tr class="bg-pboots">
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>CEDULA</th>
								<th>CORREO</th>
								<th>TELEFONO</th>
							

								<th>OPCION</th>

							

										
							</tr>
								<?php  $i = 0;
					if (count($estudiante)>0) {
						foreach ($estudiant as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><a href="?id=<?=$value['id_estudiante'];?>&idl=<?=$value['id_representante']?>"><?php echo $value['nombre_rep'];?></a></td>
							<td><?php echo $value['apellido_rep'];?></td>
							<td><?php echo $value['cedula_rep'];?></td>
							<td><?php echo $value['correo_rep'];?></td>						
							<td><?php echo $value['telefono_rep'];?></td>				
							<td><a href="../php/estudiantes/estudiante_controler.php?id=<?=$value['id_estudiante'];?>&delete_rep" class="btn btn-warning">ELIMINAR</a></td>
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>

					</table>
					<?php if (isset($_GET['idl'])) { ?>
					<span style="float: right;"><?=$estudiant[0]['nombre_rep'] ." " .$estudiant[0]['apellido_rep']?>:
					
				<a href="#ventana9" class="btn btn-info" data-toggle="modal" style="display: inline-block;" ><span class="icon-user-plus"></span> Editar</a></span>
				<?php } ?>
			</div>
				<?php } ?>
			</div>
			<?php if (isset($_GET['id']) && isset($vacuna[0]['nombre_vacuna'])) { ?>
			<div class="wall-p">
					<div class="title-m">
					<h2>VACUNACION </h2>	
					
				<hr class="stylerf">
			</div>
		
								<table class="table table-striped table-bordered table-hover">
							<tr class="bg-pboots">
								<th>NOMBRE DE LA VACUNA</th>
								<th>PRIMERA DOSIS</th>
								<th>NOMBRE DE LA VACUNA</th>
								<th>SEGUNDA DOSIS</th>
								<th>NOMBRE DE LA VACUNA</th>
								<th>TERCERA DOSIS</th>
								<th>OPCION</th>				
							</tr>
								<?php  $i = 0;
					if (count($vacuna)>0) {
						foreach ($vacuna as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><?php echo $value['nombre_vacuna'];?></td>
							<td><?php echo $value['fecha_primera_d'];?></td>
							<td><?php echo $value['nombre_vacuna2'];?></td>
							<td><?php echo $value['fecha_segunda_d'];?></td>
							<td><?php echo $value['nombre_vacuna3'];?></td>
							<td><?php echo $value['fecha_tercera_d'];?></td>		
							<td><a href="../php/estudiantes/estudiante_controler.php?delete_v&id=<?=$value['id_estudiante'];?>" class="btn btn-warning">ELIMINAR</a></td>
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>

					</table>
			
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
