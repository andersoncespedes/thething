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
			$this->conn  = new conexio();
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
		public function getVacuna()
		{
			$query  = "SELECT * FROM nombre_vacuna";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			rsort($data);
			array_pop($data);
			return $data;	
		}


		public function newEstudiante($data)
		{
			$query  = "INSERT INTO estudiante(nombres, apellidos, cedula, grado, nacimiento,sexo) VALUES('".$data['nombre']."','".$data['apellido']."', '".$data['cedula']."', '".$data['grado']."', '".$data['nacimiento']."', '".$data['sexo']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}
		public function newVacuna($data)
		{
			$query  = "INSERT INTO vacunacion(nombre_vacuna, fecha_primera_d,nombre_vacuna2, fecha_segunda_d,nombre_vacuna3, fecha_tercera_d, id_estudiante) VALUES('".$data['nombre_vacuna']."','".$data['primera_dosis']."','".$data['nombre_vacuna2']."', '".$data['segunda_dosis']."', '".$data['nombre_vacuna3']."','".$data['tercera_dosis']."', '".$data['id']."') ";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

		public function getActEst($id)
		{
			$query  = " SELECT E.nombres, E.apellidos,E.cedula, E.grado
				FROM participante D
				 JOIN estudiante E
				ON E.id_estudiante = D.id_estudiante WHERE D.id_actividad = " .$id;
			$result = mysqli_query($this->link, $query);
			$data   = array();
  			while ($data[] = mysqli_fetch_assoc($result));
  			array_pop($data);
			return $data;
		}

		public function getEstudianteById($id=NULL)
		{
		if (!empty($id)) 
			{
				$query  = " SELECT  E.id_estudiante, E.nombres, E.apellidos,E.cedula, E.grado, E.nacimiento,D.id_representante, D.nombre_rep, D.apellido_rep,D.cedula_rep, D.correo_rep, D.telefono_rep, D.direccion_rep
				FROM estudiante E
				 JOIN representante D
				ON E.id_estudiante = D.id_estudiante WHERE E.id_estudiante = " .$id;
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				  if (isset($data[0]['apellido_rep'])) {
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
		public function getVacunaById($id=NULL)
		{
		if (!empty($id)) 
			{
				$query  = " SELECT E.id_estudiante, E.nombre_vacuna,  E.fecha_primera_d,E.nombre_vacuna2, E.fecha_segunda_d,E.nombre_vacuna3, E.fecha_tercera_d
				FROM vacunacion E
				 JOIN estudiante D
				ON E.id_estudiante = D.id_estudiante WHERE E.id_estudiante = " .$id;
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				return $data;
					
			}

		}
		
		public function setEditEstudiante($data){
		
				$query  = "UPDATE estudiante SET nombres = '".$data['nombre']."', apellidos = '".$data['apellido']."', cedula = '".$data['cedula']."', grado = '".$data['grado']."', nacimiento = '".$data['nacimiento']."' WHERE id_estudiante =" .$data['id_m'];
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			
		}
		public function setEditRepresentante($data){
		
			$query  = "UPDATE representante SET nombre_rep = '".$data['nombre']."', apellido_rep = '".$data['apellido']."', cedula_rep = '".$data['cedula']."', correo_rep = '".$data['correo']."', telefono_rep = '".$data['telefono']."' WHERE id_representante =" .$data['id_m'];
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
			public function deleteEstudianteVac($id){
			
				$query = "DELETE vacunacion
				FROM vacunacion
				WHERE id_estudiante =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}
				else{
					return false;
				}
			}
			public function deleteEstudianteRep($id){
			
				$query = "DELETE representante
				FROM representante
				WHERE id_estudiante =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}
				else{
					return false;
				}
			}
		
			public function buscarEstudiantes($buscar){
			
				$query = "SELECT * FROM estudiante WHERE nombres LIKE '%".$buscar."%' OR apellidos LIKE '%".$buscar."%' OR cedula LIKE '%".$buscar."%' OR grado LIKE '%".$buscar."%' OR nacimiento LIKE '%".$buscar."%' OR sexo LIKE '%".$buscar."%'";
				$result = mysqli_query($this->link, $query);
				$data = array();
				while ($data[] = mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
					
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