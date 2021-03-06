	<?php
		include "../php/estadistica/estadistica.php";
		$estadistica = new estadistica;
		$estadistic = $estadistica->getEstadistica();	
		$estadistica_z = $estadistica->getEstadisticaByN();
		$estadistica_n = $estadistica->getEstadisticaByname();
		$estadistica_est = $estadistica->getActEst();
		$estadistica_estm = $estadistica->getMaesEst();
		$estadistica_estu = $estadistica->getUserEst();
		$estadistica_estud = $estadistica->getUserEstud();
		$estadistica_estudiante = $estadistica->getEstadisticaByEstudiante();
		$estadistica_vacuna = $estadistica->getEstadisticaByVacuna();
		$estudiante_sexo = $estadistica->getEstudianteBySexo();
		$studiannim = $estadistica->getEstudNum();
		$vacunanum = $estadistica->getVacuNum();

		$tamaño = 4;
		$begin  = ($_GET['pag'] - 1) * $tamaño;
		$estadistica_integ = $estadistica->getEstadisticaByInteg($tamaño, $begin);
		$i = 0;
		foreach ($estadistica_z as $column => $value) {	
		$i++;
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
		<script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/chartJS/Chart.min.js"></script>
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

		</header>
		<main class="container" style="display: flex; background-color: rgba(0,0,0,0); flex-wrap: wrap;">

			<div class="wall-p" >
					<div class="title-m">
						<h2>ESTADISTICA DE PARTICIPANTES</h2>	
						<hr class="stylerf">
					</div>
				<div style="width: 100%;display: flex; flex-wrap: wrap;">
					<div style="width: 60%;">
						<canvas id="canvas"  style=""></canvas>	
					</div>
			<div style="width: 40%; margin: auto; text-align: left;">
				<h3>Nombres:</h3><br>
							<?php 
					if (count($estadistica_integ)>0) {
						foreach ($estadistica_integ as $column => $value) {

							?>
							 
						<?php echo  'Proyecto: ' .$value['nombre_act']. ' = ' .$value['est_integ']; ?><br>
				<?php 
		}
		} 
			if ($begin - $tamaño >= 0 ) {?>
				<a href="?pag=<?=$_GET['pag']-1?>" class = "btn btn-danger">ATRAS</a>
			<?php } if ($begin + $tamaño < $estadistica_est ) { ?>
			 <a href="?pag=<?=$_GET['pag']+1?>" class = "btn btn-success">SIGUIENTE</a>
			 <?php }  ?>
			</div>
			</div>
			</div>
			
			</div>
						<div class="wall-p" >
				<div class="title-m">
						<h2>CONTADOR DE LA BASE DE DATOS</h2>	
						<hr class="stylerf">
					</div>
					<div style="display: flex; flex-wrap: wrap; font-size: 30px; width: 100%;">
						<div class="cont" style="background-color:#F1948A; ">		
							
							<div class="cont-img">
								<img src="../img/creatividad (1).png">
							</div>
							<?=$estadistica_est?>
						</div>
						<div class="cont" style="background-color: #82E0AA">
							<div class="cont-img">
								<img src="../img/creatividad (2).png">
							</div>						
							
							<?=$estadistica_estm?>
						</div>
						<div class="cont" style="background-color: #85C1E9">
							<div class="cont-img">
								<img src="../img/ilustracion.png">
							</div>	
							
							<?=$estadistica_estu?>
						</div>
						<div class="cont" style="background-color: #b445ed">
							<div class="cont-img">
								<img src="../img/de-la-a-a-la-z.png">
							</div>	
							<?=$estadistica_estud?>
						</div>
					</div>
					</div>
				
			</div>
			<div class="wall-p" style="width: 50%;">
					<div class="title-m">
					<h2>ESTADISTICA DE MAESTROS</h2>	
				<hr class="stylerf">
				<div style="width: 100%; display:flex; flex-wrap: wrap;">
							<div style="width: 40%; margin: auto; text-align: left;">
							<?php 
					if (count($estadistica_n)>0) {
						foreach ($estadistica_n as $column => $value) {

							?>
							 
						<?php echo  $value['maes_res']. ' = ' .$value['nomsum']. ' (' .intval(($value['nomsum']) * 100 / $i ). '%)'; ?><br>
				<?php 
					}
					} 
				?>
			</div>
				<div style="width: 60%; padding: 20px;" >
						<canvas id="canvas1"  style="width: 100%;"></canvas>	
					</div>
		
			</div>
			</div>
		</div>
					<div class="wall-p" style="width: 50%;">
					<div class="title-m">
					<h2>ESTADISTICA DE ACTIVIDADES</h2>	
				<hr class="stylerf">
				<div style="width: 100%; display:flex; flex-wrap: wrap;">
							<div style="width: 40%; margin: auto; text-align: left;">
							<?php 
					if (count($estadistic)>0) {
						foreach ($estadistic as $column => $value) {

							?>
							 
						<?php echo  $value['tipo_act']. 'S = ' .$value['suma']. ' (' .intval(($value['suma']) * 100 / $i ). '%)'; ?><br>
				<?php 
					}
					} 
				?>
			</div>
				<div style="width: 60%; padding: 20px;" >
						<canvas id="canvas2"  style="width: 100%;"></canvas>	
					</div>
		
			</div>
			
			</div>
				</div>
				</div>
				<div class="wall-p" >
					<div class="title-m">
						<h2>ESTADISTICA DE GRADOS</h2>	
						<hr class="stylerf">
					</div>
				<div style="width: 100%;display: flex; flex-wrap: wrap;">
				<div style="width: 20%; margin: auto; text-align: right;">
				<h3>Grados:</h3><br>
							<?php 
					if (count($estadistica_estudiante)>0) {
						foreach ($estadistica_estudiante as $column => $value) {

							?>
							 
						<?php echo $value['grado']. ' = ' .$value['num_est']; ?><br>
				<?php 
		}
		} 
		?>
				
			</div>
				<div style="width: 80%;">
						<canvas id="canvas4"  style=""></canvas>	
					</div>
			
			</div>
			</div>
			
			</div>
			<div style = "width: 100%; display:flex; flew-wrap:wrap;">
			<div class="wall-p" style = "width:50%;" >
					<div class="title-m">
						<h2>ESTADISTICA DE SEXOS</h2>	
						<hr class="stylerf">
					</div>
				<div style="width: 100%;display: flex; flex-wrap: wrap;">
				<div style="width: 40%; margin: auto; text-align: right;">
				<h3>Sexo:</h3><br>
							<?php 
					if (count($estudiante_sexo)>0) {
						foreach ($estudiante_sexo as $column => $value) {

							?>
							 
						<?php echo $value['sexo']. ' = ' .$value['estud_sex'] .' (' .intval(($value['estud_sex']) * 100 / $studiannim). '%)'; ?><br>
				<?php 
		}
		} 
		?>
				
			</div>
	</div>
				<div style="width: 60%;">
						<canvas id="chart-area"  style=""></canvas>	
					</div>
			
			</div>
			<div class="wall-p" style = "width:50%;" >
					<div class="title-m">
						<h2>ESTADISTICA DE VACUNAS</h2>	
						<hr class="stylerf">
					</div>
				<div style="width: 100%;display: flex; flex-wrap: wrap;">
				<div style="width: 40%; margin: auto; text-align: right;">
				<h3>Vacuna:</h3><br>
							<?php 
					if (count($estadistica_vacuna)>0) {
						foreach ($estadistica_vacuna as $column => $value) {

							?>
							 
						<?php echo $value['nombre_vacuna']. ' = ' .$value['num_est'] .' (' .intval(($value['num_est']) * 100 / $vacunanum). '%)'; ?><br>
				<?php 
		}
		} 
		?>
				
			</div>
	</div>
				<div style="width: 60%;">
						<canvas id="chart-area1"  style=""></canvas>	
					</div>
			
			</div>
			</div>
			</div>
			
	</div>
	
	</div>

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

	<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
					<?php 

					$color = ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"];$b = 0;
						foreach ($estadistica_integ as $column => $value) { ?>
					'<?php echo $value['nombre_act'];?>',
				<?php } ?>

		],
		datasets : [
			{
				fillColor : "#46BFBD",
				strokeColor : "#82E0AA",
				highlightFill: "#82E0AA",
				highlightStroke: "#82E0AA",
				data : [
				<?php 
			
	
					if (count($estadistica_integ)>0) {
						foreach ($estadistica_integ as $column => $value) {	
						 
							?>

					<?=$value['est_integ']?>,
				<?php 
		}
		} 
			?>
				
				]
			}
		]

	}
	var doughnutData = [<?php 
						$color = ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"];
						$i 	   = 0;
					foreach ($estudiante_sexo as $column => $value) { ?>
				{
					
					value: <?=$value['estud_sex']?>,
					color: '<?=$color[$i]?>',
					highlight: '<?=$color[$i]?>',
					label: '<?=$value['sexo']?>',

				
					
				},
					<?php $i++; } ?>
					
			];
			var doughnutData1 = [<?php 
						$color = ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"];
						$i 	   = 0;
					foreach ($estadistica_vacuna as $column => $value) { ?>
				{
					
					value: <?=$value['num_est']?>,
					color: '<?=$color[$i]?>',
					highlight: '<?=$color[$i]?>',
					label: '<?=$value['nombre_vacuna']?>',

				
					
				},
					<?php $i++; } ?>
					
			];
	var barChartData1 = {
		labels : [
					<?php 

					$b = 0;
						foreach ($estadistica_estudiante as $column => $value) { ?>
					'<?php echo $value['grado'];?>',
				<?php } ?>

		],
		datasets : [
			{
				fillColor : "#F7464A",
				strokeColor : "#82E0AA",
				highlightFill: "#FDB45C",
				highlightStroke: "#82E0AA",
				data : [
				<?php 
			
	
					if (count($estadistica_estudiante)>0) {
						foreach ($estadistica_estudiante as $column => $value) {	
						 
							?>

					<?=$value['num_est']?>,
				<?php 
		}
		} 
			?>
				
				]
			}
		]

	}
		var pieData = [<?php 
						
						$i 	   = 0;
					foreach ($estadistica_n as $column => $value) { ?>
				{
					
					value: <?=$value['nomsum']?>,
					color: '<?=$color[$i]?>',
					highlight: '<?=$color[$i]?>',
					label: '<?=$value['maes_res']?>',

				
					
				},
					<?php $i++; } ?>
					
			];
					var pieData1 = [<?php 
						
						$i 	   = 0;
					foreach ($estadistic as $column => $value) { ?>
				{
					
					value: <?=$value['suma']?>,
					color: '<?=$color[$i]?>',
					highlight: '<?=$color[$i]?>',
					label: '<?=$value['tipo_act']?>',

				
					
				},
					<?php $i++; } ?>
					
			];
			var pieData1 = [<?php 
						
						$i 	   = 0;
					foreach ($estadistica_n as $column => $value) { ?>
				{
					
					value: <?=$value['nomsum']?>,
					color: '<?=$color[$i]?>',
					highlight: '<?=$color[$i]?>',
					label: '<?=$value['maes_res']?>',

				
					
				},
					<?php $i++; } ?>
					
			];
					var pieData1 = [<?php 
						
						$i 	   = 0;
					foreach ($estadistic as $column => $value) { ?>
				{
					
					value: <?=$value['suma']?>,
					color: '<?=$color[$i]?>',
					highlight: '<?=$color[$i]?>',
					label: '<?=$value['tipo_act']?>',

				
					
				},
					<?php $i++; } ?>
					
			];


	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
		responsive : true
		});
		var ctx3 = document.getElementById("canvas4").getContext("2d");
		window.myBar = new Chart(ctx3).Bar(barChartData1, {
		responsive : true
		});
		var ctx1 = document.getElementById("canvas1").getContext("2d");
				window.myPie = new Chart(ctx1).Pie(pieData);
				var ctx2 = document.getElementById("canvas2").getContext("2d");
				window.myPie = new Chart(ctx2).Pie(pieData1);
				var ctx9 = document.getElementById("chart-area").getContext("2d");
				window.myDoughnut = new Chart(ctx9).Doughnut(doughnutData, {responsive : true});
				var ctx10 = document.getElementById("chart-area1").getContext("2d");
				window.myDoughnut = new Chart(ctx10).Doughnut(doughnutData1, {responsive : true});
	}
	

				
		



	</script>
	</script>

</body>
</html>
