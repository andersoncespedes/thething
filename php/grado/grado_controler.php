<?php
	include "grado.php";

	$grado = new grado;
	if (isset($_POST['crear'])) {
		if ($grado->newGrado($_POST) ) {
			header('location: ../../perfil/maestros.php?regis_grado=1');
		}
		else{
			header('location: ../../perfil/maestros.php?regis_grado_error=1?');
		}
	}

	if (isset($_POST['editar'])) {
		if ($users->setEditUser($_POST)) {
			header('location: ../../perfil/editar_usuario.php?page=edit&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/editar_usuario.php?page=edit&id=' .$_POST['id']. 'error=true');
		}
	}

    if (isset($_GET['delete'])) {
		if ($grado->deleteGrado($_GET['id'])) {
			header('location: ../../perfil/maestros.php?success_elim_grado=1');
		}
		else{
			header('location: ../../perfil/maestros.php?fail_elim_grado=1');
		}
	}


?>