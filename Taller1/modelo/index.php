<?php
class Modelo{
	private $Modelo;
	private $db;
	private $datos;
	public function __construct(){
		%this->Modelo = array();
		$this->db = new PDO("mysql:host=localhost;dbname=tuti","root","");
	}
	public function insertar($tabla, $data){
		$consulta= "inert into ".$tabla." values(null,". $data .
		if ($resultado){
			return true;
		}else{
			return false;
		}

	public function mostrar($tabla,$condicion){
		$consul="select * from ".$tabla."where".$condicion.";";
		$resu=$this->db->query($consul);
		while($filas =$resu->FETCHALL(PDO::FETCH_ASSOC)) {
			$this->datos[]=$filas;

		}
	return $this->datos;

	}
	public fuction actualizar($tabla, $data, $condiction){
		$consulta="update ".$tabla."set".$data."where".$condicion;
		$resultado=$this->db->query($consulta);
		if ($resultado){
			return true;
		}ele{
			return false;
		}
	}
    public fuction eliminar($tabla, $condicion){
    	$eli="delete from ".$tabla"where".$condicion;
    	$res=$this->db->query($eli);
    	if ($res){
    		return true;
    	}else{
    		return false;
    	}
    }

