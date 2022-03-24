<?php
	include "conexion.php";
	/**
	 * 
	 */
	class maestro
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexions();
			$this->link  = $this->conn->conectar();
		}
	
		public function getMaestro()
		{
			$query  = "SELECT * FROM maestro";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			rsort($data);
			array_pop($data);
			return $data;	
		}

		public function newMaestro($data)
		{
			$query  = "INSERT INTO maestro(nombres, apellidos, cedula, correo, nacimiento, direccion, servicio) VALUES('".$data['nombre']."','".$data['apellido']."', '".$data['cedula']."', '".$data['correo']."', '".$data['servicio']."', '".$data['direccion']."', '".$data['aos_s']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

		public function getMaestroById($id=NULL)
		{
		if (!empty($id)) 
			{
				$query  = "SELECT * FROM maestro WHERE id_maestro =" .$id;
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				return $data;	
			}
			else{
				return false;
			}
		}
		
		public function setEditMaestro($data){
		
				$query  = "UPDATE maestro SET nombres = '".$data['nombre']."', apellidos = '".$data['apellido']."', cedula = '".$data['cedula']."', correo = '".$data['correo']."', nacimiento = '".$data['nacimiento']."', direccion = '".$data['direccion']."', servicio = '".$data['aos_s']."'WHERE id_maestro =" .$data['id_m'];
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			
		}
		
		public function deleteMaestro($id=NULL){
			
				$query = "DELETE FROM maestro WHERE id_maestro =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}
				else{
					return false;
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
						$_SESSION['id'] = $integrantes['id'];
						$_SESSION['usuario'] = $integrantes['usuario'];
						$_SESSION['pass'] = $integrantes['pass'];
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