<?php
	require "conexion.php";

	class grado
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
	
		public function getGrado()
		{
			$query  = "SELECT * FROM grado";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}

		public function newGrado($data)
		{
			$query  = "INSERT INTO grado(grado, seccion, maestro) VALUES('".$data['grado']."','".$data['seccion']."', '".$data['maestro']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
					return true;
				}
				
			else {
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
		public function deleteGrado($id=NULL){
			
				$query = "DELETE FROM grado WHERE id_grado =" .$id;
				$result = mysqli_query($this->link, $query);	
				if (mysqli_affected_rows($this->link)>0) {
						return true;		
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
		}

	
?>