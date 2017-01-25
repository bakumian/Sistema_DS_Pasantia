<?php namespace Models;

 	class Zona
	{
		private $id;
		private $nombre;
		private $con;
		
		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atribb,$value){
			$this->$atribb = $value;
		}

		public function get($atribb){
			return $this->$atribb;
		}

		public function listar(){
			$sql = "SELECT * FROM ts_zonas";
			$datos = $this->con->consultaReturn($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO ts_zonas(id_zona,zona_nombre) VALUES (null, '{$this->nombre}')";
			$this->con->consultaSimple($sql);

		}

		public function delete(){
			$sql = "UPDATE ts_zonas WHERE id_zona = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}
		
		public function update(){
			$sql = "UPDATE ts_zonas SET zona_nombre = '{$this->nombre}', WHERE id_zona ='{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM ts_zonas WHERE id_zona = '{$this->id}'";
			$datos = $this->con->consultaReturn($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

		public function search($tabla, $atributo,$valor){
			$sql = "SELECT * FROM '{$tabla}' WHERE '{$atributo}' LIKE '{$valor}' ORDER BY '{$atributo}' ASC ";
			$datos = $this->con->consultaReturn($sql);
			return $datos;
		}

	}



?>