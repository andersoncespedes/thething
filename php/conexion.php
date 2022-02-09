<?php 

	/**
	 * 
	 */
	class conexion
	{
		public $host;
		public $user;
		public $password;
		public $database;
	
		function __construct(){
			$this->host 	= "localhost";
			$this->user 	= "root";
			$this->password = "";
			$this->database = "sanjose";
		}

		public function conectar(){
			$conexion = mysqli_connect($this->host, $this->user, $this->password, $this->database);
			if ($conexion) {
			}
			else{
				die('error de conexion ('. mysqli_connect_errno(). ') ' .mysqli_connect_error());
			}
			return $conexion;
		}
	}
 ?>