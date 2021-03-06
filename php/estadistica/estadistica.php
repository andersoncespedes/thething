<?php
	include "conexion.php";
	/**
	 * 
	 */
	class estadistica
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
	
		public function getEstadistica()
		{
			$query  = "SELECT SUM(num_actividad) AS suma, tipo_act FROM estadistica GROUP BY (tipo_act)";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}	
		public function getActEst()
		{
			$query  = "SELECT * FROM actividad";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link); 
			if ($data > 1) {
			 	$men =  $data ." ACTIVIDADES";
			 } 
			else{
				$men =  $data ." ACTIVIDAD";
			}
		
			return $men;

		}
				public function getMaesEst()
		{
			$query = "SELECT * FROM maestro";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link);
			if ($data > 1) {
			 	$men =  $data ." MAESTROS";
			 } 
			else{
				$men =  $data ." MAESTRO";
			}
			return $men;

		}
				public function getUserEst()
		{
			$query  = "SELECT * FROM usuario";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link); 
			if ($data > 1) {
			 	$men =  $data ." USUARIOS";
			 } 
			else{
				$men =  $data ." USUARIO";
			}
			return $men;

		}
		public function getUserEstud()
		{
			$query  = "SELECT * FROM estudiante";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link); 
			if ($data > 1) {
			 	$men =  $data ." ESTUDIANTES";
			 } 
			else{
				$men =  $data ." ESTUDIANTE";
			}
			return $men;

		}
		public function getEstudNum()
		{
			$query  = "SELECT * FROM estudiante";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link); 
			return $data;

		}
		public function getVacuNum()
		{
			$query  = "SELECT * FROM vacunacion";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link); 
			return $data;

		}
			public function getEstadisticaByN()
		{
			$query  = "SELECT * FROM estadistica";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
		public function getEstadisticaByVac()
		{
			$query  = "SELECT * FROM estadistica";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
			public function getEstadisticaByD()
		{
			$query  = "SELECT SUM(num_actividad) AS suma, tipo_act FROM estadistica GROUP BY tipo_act";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
			public function getEstadisticaByc()
		{
			$query  = "SELECT SUM(num_actividad) AS suma, tipo_act FROM estadistica GROUP BY tipo_act";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}

			public function getEstadisticaByname()
		{
			$query  = "SELECT SUM(num_actividad) AS nomsum, maes_res FROM estadistica GROUP BY maes_res";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
		public function getEstudianteBySexo()
		{
			$query  = "SELECT SUM(est_estud) AS estud_sex, sexo FROM estudiante GROUP BY sexo";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			rsort($data);
			array_pop($data);
			return $data;	
		}
		public function getEstadisticaByEstudiante()
		{
			$query  = "SELECT SUM(est_estud) AS num_est, grado FROM estudiante GROUP BY grado";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
		
		public function getEstadisticaByVacuna()
		{
			$query  = "SELECT SUM(est_v) AS num_est, nombre_vacuna FROM vacunacion GROUP BY nombre_vacuna";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
			public function getEstadisticaByInteg($tama??o, $begin)
		{	
			$cont = 0;
			$contador = $this->getEstadisticaByN();
			foreach($contador as $column => $value){
				$cont++;
			}
			if($begin == 0){
				$begin = $cont;
				$tama??o = $begin - $tama??o;
			}
			else{
				$begin = $cont - $begin;
				$tama??o = $begin - $tama??o;
		
				if($begin < 1){
					$begin = 1;
				}
			}
		if($tama??o < 0){
					$tama??o = 0;
				}
			$query  = "SELECT id_estadistica, est_integ, nombre_act FROM estadistica LIMIT $tama??o,$begin";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}
		
		

	}
	
?>