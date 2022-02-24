<?php
	include "estudiante.php";

	$estudiante = new estudiante;
	if (isset($_POST['crear'])) {
		if ($estudiante->newEstudiante($_POST) ) {
			header('location: ../../perfil/estudiantes.php?n_estudiante=1&success=true');
		}
		else{
			header('location: ../../perfil/estudiantes.php?n_estudiante=0&error=true');
		}
	}

	if (isset($_POST['editar'])) {
		if ($estudiante->setEditEstudiante($_POST)) {
			header('location: ../../perfil/estudiantes.php?e_maestro=1&id=' .$_POST['id_m']. '&success=true');
		}
		else{
			header('location: ../../perfil/estudiantes.php?e_maestro=0&id=' .$_POST['id_m']. '&error=true');
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
	if (isset($_POST['crear_vacuna'])) {
		if ($estudiante->newVacuna($_POST)) {
			header('location: ../../perfil/estudiantes.php?id=' .$_POST['id']. '&success=true');
		}
		else{
			header('location: ../../perfil/estudiantes.php?id=' .$_POST['id']. '&error=true');
		}
	}


	if (isset($_GET['delete'])) {
		if ($estudiante->deleteEstudiante($_GET['id'])) {
			header('location: ../../perfil/estudiantes.php?d_maestro=1&id_d=' .$_GET['id']. '&success=true');
		}
		else{
			header('location: ../../perfil/estudiantes.php?d_maestro=0&id_d=' .$_GET['id']. '&success=false');
		}
	}

?>