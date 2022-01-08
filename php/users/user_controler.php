<?php
	include "users.php";

	$users = new users;
	if (isset($_POST['crear'])) {
		if ($users->newUser($_POST) ) {
			header('location: ../../?regis_succ=1');
		}
		else{
			header('location: ../../?regis_error=1?');
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
	if (isset($_POST['editar_p'])) {
		if ($users->setEditSeg($_POST)) {
			header('location: ../../perfil/editar_usuario.php?page=edit_p&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/editar_usuario.php?page=edit_p&id=' .$_POST['id']. 'error=true');
		}
	}
	if (isset($_POST['validar'])) {
		if ($users->validarUser($_POST)) {
			header('location: ../../perfil/inicio.php?validar_user=1&success=true');
		}
		else{
			header('location: ../../index.php?error_user=0&error=true');
		}
	}

	if (isset($_GET['recuperar'])) {
		if ($users->recupFaseA($_GET)) {
			header('location: ../../recup_con.php?id=' .$_GET['cedula']);
		}
		else{
			header('location: ../../?error=' .$_GET['cedula']. 'success=true');
		}
	}
		if (isset($_POST['recuperar1'])) {
		if ($users->recupFaseB($_POST)) {
			header('location: ../../recup_con.php?id=' .$_POST['iden']);
		}
		else{
			header('location: ../../?error=' .$_POST['iden']. 'success=true');
		}
	}


?>