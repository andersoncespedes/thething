<?php
	include "maestro.php";

	$maestro = new maestro;
	if (isset($_POST['crear'])) {
		if ($maestro->newMaestro($_POST) ) {
			header('location: ../../perfil/maestros.php?page=new&success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?page=new&error=true');
		}
	}

	if (isset($_POST['editar'])) {
		if ($users->setEditUser($_POST)) {
			header('location: ../../perfil/inicio.php?page=edit&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/inicio.php?page=edit&id=' .$_POST['id']. 'error=true');
		}
	}
	if (isset($_POST['validar'])) {
		if ($users->validarUser($_POST)) {
			header('location: ../../perfil/inicio.php?page=validar&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../index.php?page=validar&id=' .$_POST['id']. 'error=true');
		}
	}

	if (isset($_GET['delete'])) {
		if ($maestro->deleteMaestro($_GET['id'])) {
			header('location: ../../perfil/maestros.php?page=delete&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/maestros.php?page=delete&id=' .$_POST['id']. 'success=true');
		}
	}

?>