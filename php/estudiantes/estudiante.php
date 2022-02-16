<?php
	include "conexion.php";
	/**
	 * 
	 */
	class estudiante
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexions();
			$this->link  = $this->conn->conectar();
		}
	
		public function getEstudiante()
		{
			$query  = "SELECT * FROM estudiante";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			rsort($data);
			array_pop($data);
			return $data;	
		}

		public function newEstudiante($data)
		{
			$query  = "INSERT INTO estudiante(nombres, apellidos, cedula, grado) VALUES('".$data['nombre']."','".$data['apellido']."', '".$data['cedula']."', '".$data['grado']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

		public function getEstudianteById($id=NULL)
		{
		if (!empty($id)) 
			{
				$query  = " SELECT E.nombres, E.apellidos, D.nombre_rep, D.apellido_rep,D.cedula_rep, D.correo_rep, D.telefono_rep, D.direccion_rep
				FROM estudiante E
				 JOIN representante D
				ON E.id_estudiante = D.id_estudiante WHERE E.id_estudiante = " .$id;
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				  if ($data[0]['apellido_rep'] != NULL) {
					 return $data;
				  }
				  else{
					  $query1 = "SELECT * FROM estudiante WHERE id_estudiante =" .$id;
					  $result1 = mysqli_query($this->link, $query1);
				$data1   = array();
  				while ($data1[] = mysqli_fetch_assoc($result1));
  				array_pop($data1);
				  return $data1;
				  }
					
			}
			else{
				return false;
			}
		}
		
		public function setEditMaestro($data){
		
				$query  = "UPDATE maestro SET nombres = '".$data['nombre']."', apellidos = '".$data['apellido']."', cedula = '".$data['cedula']."', correo = '".$data['correo']."', nacimiento = '".$data['nacimiento']."', direccion = '".$data['direccion']."' WHERE id_maestro =" .$data['id_m'];
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			
		}
		
		public function deleteEstudiante($id){
			
				$query = "DELETE estudiante
				FROM estudiante 
				WHERE id_estudiante =" .$id;
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