<?php
	require "conexion.php";

	class actividad
	{
		private $conn;
		public $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
		public function getAct()
		{
			$query  = "SELECT * FROM actividad";
			$result = mysqli_query($this->link, $query);
			$data   = mysqli_affected_rows($this->link); 
			return $data;

		}
		public function getActById($idl)
		{
			$query  = "SELECT * FROM actividad WHERE id_actividad = " .$idl;
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}
		public function getActividad()
		{
		
			$query  = "SELECT * FROM actividad";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}

		public function newpost($data)
		{
			$r 	    = rand(1,50);
			$d      = rand(1,99999999) * $r / 3;
			$foto 	= $_FILES['imagen']['name'];
			$ruta 	= $_FILES['imagen']['tmp_name'];
			$destino= "imagen/" .$foto;
			copy($ruta, $destino);
			$query  = "INSERT INTO actividad(nombre, tipo, descripcion, fecha, imagen, idenm, maestro_r, num_integ) VALUES('".$data['nombre']."','".$data['estado']."', '".$data['descripcion']."', '".$data['fecha']."', '".$destino."', '".$d."','".$data['maestro']."', '".$data['integrantes']."')";
			$result = mysqli_query($this->link, $query);
				$id = mysqli_insert_id($this->link);
			if (mysqli_affected_rows($this->link) > 0){
				for ($i=0; $i <= $data['num_check']+1 ; $i++) { 
					$query1  = "INSERT INTO participante(id_estudiante,id_actividad) VALUES('".$data[$i]."','".$id."')";
					$result1 = mysqli_query($this->link, $query1);
				}
				

				$query2  = "INSERT INTO estadistica(tipo_act, fecha_act,  nombre_act, ident, maes_res, est_integ) VALUES('".$data['estado']."','".$data['fecha']."', '".$data['nombre']."', '".$d."','".$data['maestro']."','".$data['integrantes']."')";
				$result2 = mysqli_query($this->link, $query2);
				
				if ($result){
					return true;
					
				}
				else{
					return false;
				}
				
			}else {
				return false;
			}
		}
			

				public function getActividadById($id=NULL)
		{
			if (!empty($id)) 
			{
				$query  = "SELECT * FROM actividad WHERE idenm =" .$id;
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
		public function deleteActividad($id=NULL,$img){
			
				$query = "DELETE FROM actividad WHERE idenm =" .$id;
				$result = mysqli_query($this->link, $query);	
				unlink($img); 
				if (mysqli_affected_rows($this->link)>0) {
				
					$query2 = "DELETE FROM estadistica WHERE ident =" .$id;
					$result2 = mysqli_query($this->link, $query2);
					if ($result2) {
						return true;
					}
					else{
						return false;
					}
					
				}else{
					return false;
				}
			
		}
		public function setEditActividad($data)
		{
			$foto 	= $_FILES['imagen']['name'];
			$ruta 	= $_FILES['imagen']['tmp_name'];
			$destino= "imagen/" .$foto;
			copy($ruta, $destino);
				$query  = "UPDATE actividad SET nombre = '".$data['nombre']."', tipo = '".$data['estado']."', descripcion = '".$data['descripcion']."', fecha = '".$data['fecha']."', imagen = '".$destino."', maestro_r = '".$data['maestro']."', num_integ = '".$data['integrantes']."' WHERE idenm = " .$data['id'];
				$result = mysqli_query($this->link, $query);
				if ($result) {
					$query2 = "UPDATE estadistica SET tipo_act = '".$data['estado']."', fecha_act = '".$data['fecha']."', nombre_act = '".$data['nombre']."', maes_res = '".$data['maestro']."', est_integ = '".$data['integrantes']."' WHERE ident = " .$data['id'];
				$result2 = mysqli_query($this->link, $query2);
					if ($result2) {
						return true;
					}
					else{
						return false;
					}
			
				}
				else{
					return false;
				}
			
		}			
		public function buscarActividad($buscar){
			
				$query = "SELECT * FROM actividad WHERE nombre LIKE '%".$buscar."%' OR tipo LIKE '%".$buscar."%' OR descripcion LIKE '%".$buscar."%' OR fecha LIKE '%".$buscar."%' OR maestro_r LIKE '%".$buscar."%'";
				$result = mysqli_query($this->link, $query);
				$data = array();
				while ($data[] = mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
					
		}
		public function getActividadlol($tama??o, $begin)
		{	
			$cont = 0;
			$contador = $this->getActividad();
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
			if($begin < 1){
				$begin = 1;
			}
			$query  = "SELECT * FROM actividad LIMIT $tama??o,$begin";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}
		}

	
?>