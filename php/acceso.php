	<?php if(isset($_GET['error_user']) == 1){?>
	
			
			<div class="alert alert-warning">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Upps!</strong> Su usuario o su contraseña son incorrectas. <strong>por favor intentelo de nuevo</strong>.
		</div>	
			
		
			<?php }  ?>
		  <?php if(isset($_GET['page_new']) == 1){?>
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha Ingresado con Exito.
	
			</div>
		  <?php } ?>
		  	  <?php if(isset($_GET['validar_user']) == 1){?>
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Felicidades!</strong> ha iniciado sesion con Exito.
	
			</div>
		  <?php } ?>
		  	  <?php if(isset($_GET['regis_succ']) == 1){?>
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Felicidades!</strong> se ha registrado el usuario con exito.
	
			</div>
		  <?php } ?>
		    <?php if(isset($_GET['n_maestro']) == 1){?>	
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha Ingresado un nuevo maestro con Exito.
	
			</div>
		  <?php } ?>
		      <?php if(isset($_GET['d_maestro']) == 1){?>	
			<div class="alert alert-warning">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha Eliminado un maestro con Exito.
	
			</div>
		  <?php } ?>
		       <?php if(isset($_GET['e_maestro']) == 1){?>	
			<div class="alert alert-info">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha Editado el maestro con Exito.
	
			</div>
		  <?php } ?>
		  	  <?php if(isset($_GET['fail_p']) == 3){?>
		
			
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Upps!</strong> revise la cantidad que ingreso
		</div>	
		

			
		
		  <?php } ?>
		  <?php if(isset($_GET['pagedit']) == 1){?>
		
			
			<div class="alert alert-info">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha actualizado la Actividad de forma correcta.
		</div>	
		

			
		
		  <?php } ?>
		<?php if(isset($_GET['delete']) == 1){?>
		
			
			<div class="alert alert-warning">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se Ha eliminado con exito La Actividad.
		</div>	
		

			
		
		  <?php } ?>
		  <?php if(isset($_GET['erro']) == 2){?>
			<div class="alert alert-warning">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Upps!</strong> Parece que hubo un error en el proceso de eliminar <strong>por favor intentelo de nuevo</strong>.
		</div>	


			
		
		  <?php } ?>
		  <?php if(isset($_GET['values_in']) == 2){?>
	
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha añadido con exito El producto.
		</div>	

			 <?php } ?>
			   <?php if(isset($_GET['values']) == 1){?>
		
			<div class=" col-md-12" >
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha añadido con exito La Compra.
		</div>	
			</div>

			 <?php } ?>
			   <?php if(isset($_GET['act']) == 1){?>
			
			<div class=" col-md-12" >
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha añadido con exito El usuario.
		</div>	
			</div>

			 <?php } ?>
			 	   <?php if(isset($_GET['act_fail']) == 1){?>
		
			<div class=" col-md-12" >
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡upps!</strong> hubo un error al registrarse.
		</div>	
			</div>

			 <?php } ?>
			    <?php if(isset($_GET['l']) == 1){?>
			
			<div class=" col-md-12" >
			<div class="alert alert-success">
				<span class="close" data-dismiss = "alert">&times;</span>
			<strong>¡Realizado!</strong> Se ha añadido con exito La Contraseña.
		</div>	
			</div>

			 <?php } ?>