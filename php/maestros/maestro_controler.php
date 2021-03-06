<?php
	include "maestro.php";

	$maestro = new maestro;
	if (isset($_POST['crear'])) {
		if ($maestro->newMaestro($_POST) ) {
			header('location: ../../perfil/maestros.php?n_maestro=1&success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?n_maestro=0&error=true');
		}
	}

	if (isset($_POST['editar'])) {
		if ($maestro->setEditMaestro($_POST)) {
			header('location: ../../perfil/maestros.php?e_maestro=1&id=' .$_POST['id_m']. '&success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?e_maestro=0&id=' .$_POST['id_m']. '&error=true');
		}
	}
	if (isset($_POST['validar'])) {
		if ($users->validarUser($_POST)) {
			header('location: ../../perfil/maestros.php?id=' .$_GET['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?id=' .$_GET['id']. 'error=true');
		}
	}

	if (isset($_GET['delete'])) {
		if ($maestro->deleteMaestro($_GET['id'])) {
			header('location: ../../perfil/maestros.php?d_maestro=1&id_d=' .$_GET['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?d_maestro=0&id_d=' .$_GET['id']. 'success=true');
		}
	}

?>