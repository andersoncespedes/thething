	<?php
		include "../php/actividades/actividad.php";
	
		$actividad = new actividad();
		$act = new actividad();
		$act = $act->getAct();

		
		if (isset($_POST['buscar'])) {
			$busqueda = $_POST['buscar'];
			$actividad = $actividad->buscarActividad($busqueda);
		}
		else{
	$tamaño = 4;
		$begin  = ($_GET['pag'] - 1) * $tamaño;
		$busqueda = NULL;
		$actividad = $actividad->getActividadlol($tamaño, $begin);
		}
		
	?>

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
			.date-p{
				float: right;
				font-size: 15px;
				color: grey;
			}
			.tag-p2, .tag-p1, .tag-p3{
				font-size: 20px;
				float: left;
			}
			.tag-p2{
				color: blue;
			}
			.tag-p1{
				color: red;
			}
			.tag-p3{
				color: green;
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
			.wall-p img{
				border-radius: 20px;
			}
		</style>
	</head>

	<div class="loader hidden">
			Please Wait...
		</div>
	<body style="background-color: rgba(0,0,0,0.2);">
			

	<?php include "../php/acceso2.php"; ?>

	
		<main class="container" style="display: flex; background-color: rgba(0,0,0,0);">

			<div class="wall">
			
			<?php if($_SESSION['cuenta'] == 'administrador'){?>
				<div class="post">
					<form action="newpost.php" method="GET">
						<input type="text" name="pos" placeholder="CREAR POST"><input type="submit" name="">
				
					</form>
			
				</div>	<?php } ?>
				<?php include "../php/acceso.php"; ?>
				<?php  $e = 0;
					if (count($actividad)>0) {
						foreach ($actividad as $column => $value) {	
							$e++;
				?>
				<div class="wall-p" style="cursor: pointer;">
					<span class="date-p"><?php echo $value['fecha'];?></span>
					<?php if($value['tipo'] == "REALIZADA"){?>
					<span class="tag-p2" ><?=$value['tipo'];?></span> 
					<?php } ?>
					<?php if($value['tipo'] == "DESCARTADA"){?>
					<span class="tag-p1" ><?=$value['tipo'];?></span> 
					<?php } ?>
					<?php if($value['tipo'] == "FUTURA"){?>
					<span class="tag-p3" ><?=$value['tipo'];?></span> 
					<?php } ?>
					<div class="wall-t">

						<h2><?php echo $value['nombre'];?></h2>
					</div>
					<div style="max-width: 100%; text-align: justify;">
						<?=$value['descripcion'];?>
					</div>
					
					<?php if ($value['imagen'] == "imagen/"){ ?>
					<?php } else{ ?>
					<img src="../php/actividades/<?=$value['imagen'];?>">
				<?php } ?><br>
					<b style="float: right;"> <span style="color: blue;">Maestro Responsable:</span> <?=$value['maestro_r'];?></b>
					<span style="color: red;">Participantes: </span><?=$value['num_integ'];?>
					<div class="option">
						<?php if($_SESSION['cuenta'] == 'administrador'){?>
					<div class="opciones">
					<a href="../php/actividades/actividad_controler.php?id=<?=$value['idenm'];?>&delete&img=<?=$value['imagen'];?>">ELIMINAR</a>
				</div>
				<div class="opciones" style="float: right;">
					<a href="editar_actividad.php?id=<?=$value['idenm'];?>">EDITAR</a>
				</div>
				<?php } ?>
			</div>
				</div><span class = "r" style="display: none;">3</span>
			<?php 
		}
		} 

			?>
			<?php if (isset($_GET['pag'])) {
			
				if ($begin - $tamaño >= 0 ) {?>
				<a href="?pag=<?=$_GET['pag']-1?>" class = "btn btn-danger">ATRAS</a>
			<?php } if ($begin + $tamaño < $act ) { ?>
			 <a href="?pag=<?=$_GET['pag']+1?>" class = "btn btn-success" style = "float:right;">SIGUIENTE</a>
			 <?php } } ?>
			</div>	
			<div style="width: 40%;" class="raro">
			<div class="wall-s">
				<div class="title-m">
					<h2>MENU</h2>
				</div>
					<ul>
						<li><a href=""><span class ="icon-image"></span> ACTIVIDADES</a></li>
						<li><a href="estadistica.php?pag=1"> <span class = "icon-chart-pie"></span>ESTADISTICA</a></li>
						<?php if($_SESSION['cuenta'] == 'administrador'){?>
						<li><a href="maestros.php"><span class="icon-group"></span> MAESTROS</a></li>
						<li><a href="usuarios.php"><span class= "icon-user"></span> USUARIOS</a></li>
						<li><a href="estudiantes.php"><span class ="icon-user-add"></span> ESTUDIANTES</a></li>
						<li><a href="../php/respaldo/respaffl.php"><span class ="icon-download"> </span> RESPALDO</a></li>
						<?php } ?>

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
  
	
</script>

</body>
</html>
