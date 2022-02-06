<?php
	include "conexion.php";
	/**
	 * 
	 */
	class users
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
	
		public function recupFaseA($data){
			$query = "SELECT * FROM usuario WHERE cedula = " .$data['cedula'];
			$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link) > 0) {
					return true;
				}else{
					return false;
				}
			}
		public function recupFaseB($data)
		{
			$query1 =  "SELECT * FROM seguridad_p WHERE iden_us = ".$data['iden'];
			$result1 = mysqli_query($this->link, $query1);
			$dato   = array();	
			while ($dato[] = mysqli_fetch_assoc($result1));
			array_pop($dato);
			if ($dato[0]['respuesta1'] == $data['respuesta1'] && $dato[0]['respuesta2'] == $data['respuesta2'] && $dato[0]['respuessta3'] == $data['respuesta3']) {
				$query =  "UPDATE usuario SET pass = '".$data['pass']."' WHERE id = '".$data['iden']."'";
				$result = mysqli_query($this->link, $query);
					return true;
				
			}			
		}
		
		public function getUser()
		{
			$query  = "SELECT * FROM usuario";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}

		public function newUser($data)
		{
			$query  = "INSERT INTO usuario(cedula, usuario, pass, correo) VALUES('".$data['cedula']."','".$data['usuario']."', '".$data['pass']."', '".$data['correo']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

		public function getUserById($id=NULL)
		{
			
				$query  = "SELECT * FROM usuario WHERE id =" .$_SESSION['id'];
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				return $data;	
			
		}
			public function getSecByIden()
		{

				$query  = "SELECT * FROM seguridad_p WHERE iden_us =" .$_SESSION['id'];
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				return $data;	
			
		}
		public function getUserByCed($id=NULL)
		{
			
				$query  = "SELECT * FROM usuario WHERE cedula =" .$id;
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
  				$query1 = "SELECT * FROM seguridad_p WHERE iden_us =" .$data[0]['id'];
  				$result1 = mysqli_query($this->link, $query1);
  				if ($result1) {
  					while ($dato[] = mysqli_fetch_assoc($result1));
  					array_pop($dato);
  				return $dato;
  				}
  		}
		
		public function setEditUser($data){
			session_start();
			$foto 	= $_FILES['imagen']['name'];
			$ruta 	= $_FILES['imagen']['tmp_name'];
			$destino= "imagen/" .$foto;
			copy($ruta, $destino);
				$query  = "UPDATE usuario SET nombres = '".$data['nombre']."', apellidos = '".$data['apellido']."', cedula = '".$data['cedula']."', nacimiento = '".$data['nacimiento']."', usuario = '".$data['usuario']."', pass = '".$data['pass']."', imagen_us = '".$destino."' WHERE id = '".$_SESSION['id']."'";
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			
		}
				public function setEditSeg($data){
				session_start();
				if ($_SESSION['pass'] == $data['pass']) {
				$query  = "INSERT INTO seguridad_p(iden_us, pregunta1, respuesta1, pregunta2, respuesta2 ,pregunta3, respuessta3) VALUES ('".$_SESSION['id']."','".$data['pregunta1']."','".$data['respuesta1']."','".$data['pregunta2']."','".$data['respuesta2']."','".$data['pregunta3']."','".$data['respuesta3']."')";
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		
		public function deleteUser($id=NULL){
			if (!empty($id)) {
				$query = "DELETE FROM usuarios WHERE id =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}else{
					return false;
				}
			}
		}
		public function changeUser($id=NULL, $usuario){
			if (!empty($id)) {
				if($usuario == 'administrador'){
				$query = "UPDATE usuario SET tipo_usu = 'corriente' WHERE id =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}else{
					return false;
				}	
				}
				else{
					$query = "UPDATE usuario SET tipo_usu = 'administrador' WHERE id = " .$id;
					$result = mysqli_query($this->link, $query);
					if (mysqli_affected_rows($this->link)>0) {
						return true;
					}else{
						return false;
					}	
				}
			}
		}
		
		public function validarUser($data){
			$query = "SELECT * FROM usuario WHERE usuario = '".$data['usuario']."'";
			$result = mysqli_query($this->link, $query);
			if ($result) {
				if (mysqli_num_rows($result) > 0) {
					$integrantes = mysqli_fetch_array($result, MYSQLI_ASSOC);
					if ($integrantes['pass'] == $data['pass']) {
						@session_start();
						$_SESSION['id'] 	 = $integrantes['id'];
						$_SESSION['ident_p'] = $integrantes['ident_p'];
						$_SESSION['usuario'] = $integrantes['usuario'];
						$_SESSION['pass']	 = $integrantes['pass'];
						$_SESSION['cuenta']	 = $integrantes['tipo_usu'];
						mysqli_close($this->link);
						return true;
					}
					else{
						return false;
					}
					
				}
			}
		}

	}
	
?>