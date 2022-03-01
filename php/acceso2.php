
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"> 
	<link rel="stylesheet" type="text/css" href="../css/flexslider.css"> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="../css/icofont.css">

	<style type="text/css">
		form{

		}
		.buscar{
			width: 100%;
	padding: 3px;
	font-size: 15px;
		}
	</style>


			 	<header id="l">
		
			<nav>

				<ul>
					<li class="r"><h3 style="color: red;">APPLE<span style="color:steelblue;"> JHIN</span></h3></li>
					<li class="r"><a href="../perfil/inicio.php?pag=1" class="s">INICIO</a></li>
					<li class="r"><a href="../perfil/info.php" class="s">INSTITUCION</a></li>
					<li class="r"><a href="#page-2" class="s">ACERCA DE</a></li>
					<li style="float: right;" class="drop-main r" ><a href="" class="s">Bienvenido <?=$_SESSION['usuario'];?></a>
					<div class="drop">
						<ul>
							<li><a href="../perfil/editar_usuario.php">CONFIGURACION</a></li>
							<li><a href=""> MANUAL</a></li>
							<li><a href="?logout" >SALIR</a></li>
						</ul>
						
					</div>
					</li>
					<li class="r" style="float: right;"><form action="../perfil/inicio.php" method="POST">
						<input type="text" name="buscar" placeholder="Buscar" class="buscar"><input type="submit" name="btnsearch" style="display: none;">
					</form></li>
					
					
				</ul>
			</nav>
			
		</header>
			<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript">
		
$(document).ready(function(){

	$('.flexslider').flexslider({
		prevText: "",
		nextText: "",
		pauseOnAction: false,
		slideshowSpeed: 3000,
		touch: true
	});

});
	$(window).scroll(function () {
			if ($(document).scrollTop() > 100) {
				$('nav').addClass('tu');
			}
			else if ($(document).scrollTop() <20) {
				$('nav').removeClass('tu');
			}
			});

	</script>
		