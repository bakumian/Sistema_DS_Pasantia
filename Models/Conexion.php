<?php namespace Models;

	
	class Conexion
	{
		
		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "suite",
		);
		private $con;

		public function __construct(){
			echo mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
			$this->con = new \mysqli($this->datos['host'], $this->datos['user'], $this->datos['pass'], $this->datos['db']);
			$this->con->set_charset('utf8');
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaReturn($sql){
			echo $sql;
      		echo $this->con->query($sql);
			$datos = $this->con->query($sql);
			return $datos;
		}

		public function consulta_very($sql){
			if ($response = $this->con->query($sql)) {
				
				if ($response->num_rows > 0) {
					return true;
				}else{
					return false;
				}	
			}
		}
	}

?>