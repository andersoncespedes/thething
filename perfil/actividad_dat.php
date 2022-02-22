<?php
		include "../php/actividades/actividad.php";
		include "../php/estudiantes/estudiante.php";
		$act1 = new actividad();
		$estudi = new estudiante();
		$estud = $estudi->getActEst($_GET['id']);

		$act = $act1->getActById($_GET['id']);	
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
				<?php include "../php/acceso.php"; ?>
	
			
				<div class="wall-p" style="cursor: pointer;">
					<span class="date-p"><?=$act[0]['fecha'];?></span>
					<span class="tag-p2" ><?=$act[0]['tipo'];?></span> 
				
					
					<div class="wall-t">
				
						<h2><?=$act[0]['nombre'];?></h2>
					</div>
					<div style="max-width: 100%; text-align: justify;">
						<?=$act[0]['descripcion'];?>
					</div>
					
					<?php if ($act[0]['imagen'] == "imagen/"){ ?>
					<?php } else{ ?>
					<img src="../php/actividades/<?=$act[0]['imagen'];?>">
				<?php } ?><br>
					<b style="float: right;"> <span style="color: blue;">Maestro Responsable:</span> <?=$act[0]['maestro_r'];?></b>
					<span style="color: red;">Participantes: </span><?=$act[0]['num_integ'];?>
					
		
			
				</div><span class = "r" style="display: none;">3</span>
				<div class="wall-p">
					<div class="title-m">
					<h2>ESTUDIANTES</h2>	
					
				<hr class="stylerf">
			</div>
		
								<table class="table table-striped table-bordered table-hover">
							<tr class="bg-pboots">
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>CEDULA</th>
								<th>GRADO</th>
							

							

										
							</tr>
								<?php  $i = 0;
					if (count($estud)>0) {
						foreach ($estud as $column => $value) {	
					$i++;
				?>
						<tr class="elsegundo" style="text-align: center;">
							<td><a href="?id=<?=$value['id_estudiante'];?>"><?php echo $value['nombres'];?></a></td>
							<td><?php echo $value['apellidos'];?></td>
							<td><?php echo $value['cedula'];?></td>
							<td><?php echo $value['grado'];?></td>
						
							
				
						
						</tr>
					<?php }
						} if($i == 0){?>
				<tr>
				
							<td>No hay datos</td>	
							
								<?php }  ?>
				</tr>

					</table>
						</div>
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