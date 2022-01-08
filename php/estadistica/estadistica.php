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
			public function getEstadisticaByN()
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
			public function getEstadisticaByInteg($tamaño, $begin)
		{	
			$cont = 0;
			$contador = $this->getEstadisticaByN();
			foreach($contador as $column => $value){
				$cont++;
			}
			$retro = $cont - $begin;
			$comienzo = $cont - $tamaño;
			echo $retro ." " .$comienzo;
			$query  = "SELECT id_estadistica, est_integ, nombre_act FROM estadistica LIMIT $comienzo,$retro";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}
		
		

	}
	
?>