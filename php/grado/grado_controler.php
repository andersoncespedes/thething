<?php
	include "grado.php";

	$grado = new grado;
	if (isset($_POST['crear'])) {
		if ($grado->newGrado($_POST) ) {
			header('location: ../../perfil/maestros.php?regis_succ=1');
		}
		else{
			header('location: ../../perfil/maestros.php?regis_error=1?');
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
			header('location: ../../perfil/maestros.php?d_maestro=1&id_d=' .$_GET['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?d_maestro=0&id_d=' .$_GET['id']. 'success=true');
		}
	}


?>