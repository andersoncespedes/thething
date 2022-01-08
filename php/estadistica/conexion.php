<?php 
	/**
	 * 
	 */
	class conexion
	{
		private $host;
		private $user;
		private $password;
		private $database;
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