<?php
	include "actividad.php";

	$actividad = new actividad;
	if (isset($_POST['crear'])) {
		if ($actividad->newpost($_POST) ) {
			header('location: ../../perfil/inicio.php?page_new=1&pag=1');
		}
		else{
			header('location: ../../perfil/inicio.php?page_error=0&pag=1');
		}
	}

	if (isset($_POST['editar'])) {
		if ($actividad->setEditActividad($_POST)) {
			header('location: ../../perfil/inicio.php?pag=1&pagedit=1&id=' .$_GET['id']);
		}
		else{
			header('location: ../../perfil/inicio.php?pag=1&pagedit=0&id=' .$_GET['id']);
		}
	}
	if (isset($_POST['validar'])) {
		if ($users->validarUser($_POST)) {
			header('location: ../../perfil/inicio.php?pag=1&page=validar&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../index.php?pag=1&page=validar&id=' .$_POST['id']. 'error=true');
		}
	}

	if (isset($_GET['delete'])) {
		if ($actividad->deleteActividad($_GET['id'], $_GET['img'])) {
			header('location: ../../perfil/inicio.php?pag=1&delete=1&id=' .$_GET['id']);
		}
		else{
			header('location: ../../perfil/inicio.php?pag=1&delete=1&id=' .$_GET['id']);
		}
	}

?>