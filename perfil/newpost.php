	<?php
			include "../php/maestros/maestro.php";
			include "../php/estudiantes/estudiante.php";
			$maestro = new maestro;
			$estudiante = new estudiante;
			$estudiantes = $estudiante->getEstudiante();
			$maestro = $maestro->getMaestro();
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
		
			Please Wait...
		</div>
	<body style="background-color: rgba(0,0,0,0.2);">
			
		<?php include "../php/acceso2.php"; ?>
		<main class="container" style="display: flex; background-color: rgba(0,0,0,0);">
			<div class="wall-x" >
			
				
					<div class="title-m">
					<h2>NUEVA ACTIVIDAD</h2>
				</div>
					<div class="post-l">
						<form action="../php/actividades/actividad_controler.php" method="POST" enctype="multipart/form-data" id="registro1">
							
						
							<input type="text" name="nombre" class="titulo" placeholder="TITULO" value="<?=$_GET['pos']?>">
							<h2>DESCRIPCION</h2>
							<textarea placeholder="Descripcion" name="descripcion" style="max-width: 100%;"></textarea>
							<h2>RECURSOS</h2>
							<label class="col-form-label">IMAGEN</label>
							<input type="file" name="imagen" class="form-control">ESTADO<br>
							<select name="estado" class="form-control"> <br>
								<option value="REALIZADA">REALIZADA</option>
								<option value="FUTURA">FUTURA</option>
								<option value="DESCARTADA">DESCARTADA</option><br>
							</select>
							<div style="width: 100%; display: flex; flex-wrap: wrap;">
								<div class="col-md-6">
							<label class="col-form-label">MAESTRO RESPONSABLE</label>
							<select name="maestro" class="form-control"> 
								<?php foreach ($maestro as $column => $value) {?>
								<option value="<?=$value['nombres'] ." " .$value['apellidos']?>"><?=$value['nombres'] ." " .$value['apellidos']?></option>
								<?php } ?>	
							</select>
						</div>
							<div class="col-md-6">
							<label class="col-form-label">NUMERO DE INTERGRANTES</label>
							<input type="number" name="integrantes" class="form-control">
							</div>
						</div>
							<label class="col-form-label">FECHA</label>
							<input type="date" name="fecha" class="form-control"><br>
							<h2>PARTICIPANTES</h2>
							<div class="form-check" style = "margin-bottom:5px;">
								<?php $d =0; foreach($estudiantes as $column => $value){ ?>
						  		<input class="form-check-input" type="checkbox" value="<?=$value['id_estudiante'] ?>" name = "<?=$d++;?>" checked>
  								<label class="form-check-label">
   							 	<?=$value['nombres'] ." " .$value['apellidos']; ?><br>
 								 </label>
								  <?php } ?>
							</div>
							<input type ="number" style = "display:none;" name = "num_check" value = "<?=$d?>">
							<input type="submit" name="crear" value="CREAR" class="btn btn-warning" style="width: 100%;">
						</form>
						
					</div>
				</div>
				
			
				</div>
		</div>
			<div style="width: 40%;" class="raro">
			<div class="wall-s">
				<div class="title-m">
					<h2>MENU</h2>
				</div>
					<ul>
						<li><a href=""><span class ="icon-image"></span> ACTIVIDADES</a></li>
						<li><a href="estadistica.php?pag=1"><span class = "icon-chart-pie"></span> ESTADISTICA</a></li>
						<li><a href="maestros.php"><span class="icon-group"></span> MAESTROS</a></li>
						<li><a href="usuarios.php"><span class= "icon-user"></span> USUARIOS</a></li>
						<li><a href="estudiantes.php"><span class ="icon-user-add"></span> ESTUDIANTES</a></li>
						<li><a href="../php/respaldo/respaffl.php"><span class ="icon-download"></span> RESPALDO</a></li>
						

					</ul>
				</div>
			<div class="wall-sc">
				<div class="title-m">
					<h2>CREADOR</h2>
				</div>
					<ul>
						<li><a href=""> instagram:</a></li>
						<li><a href="estadistica.php"> Twitter:</a></li>
						<li><a href="maestros.php"> facebook</a></li>
					</ul>
				</div>
			
				<div id="ddd" style="width: 100%;"></div>
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
		</script>

		<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript">
var formulario1 = document.getElementById('registro1');
var fdd = document.getElementById('ddd');
var expresion = /\w+@\w+\.+[a-z]/;
(function () {
function cedula(ev) {
	 if (formulario1.nombre.value.length < 6) {
		fdd.innerHTML += "<div class='alert alert-warning'><span class='close' data-dismiss = 'alert'>&times;</span> EL TITULO DEBE TENER MAS DE 6 LETRAS</strong></div><br>";
		ev.preventDefault();
	}
}

function apellido(ev) {
	if (formulario1.descripcion.value.length <= 50) {
		fdd.innerHTML += "<div class='alert alert-warning'><span class='close' data-dismiss = 'alert'>&times;</span> LA DESCRIPCION DEBE TENER MAS DE 50 LETRAS</strong></div><br>"
		ev.preventDefault();
	}
}
function correo(ev) {
	if (!expresion.test(formulario1.correo.value)) {
		alert('El correo ingresado no es valido');
		ev.preventDefault();
	}
}
function servicio(ev) {
	if (formulario1.cedula.value.length == 0) {
		alert('Complete campo a??os de servicio');
		ev.preventDefault();
	}
	else if (isNaN(formulario1.servicio.value)) {
		alert('solo se permiten numeros en el campo a??os de servicio');
		ev.preventDefault();
	}
	
}
function validar(ev) {
	cedula(ev);
	apellido(ev);
	servicio(ev);
	correo(ev);
}
formulario1.addEventListener('submit', validar);
}())
</script>
<script>
    $(function() {
        $('#ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>
</body>
</html>
