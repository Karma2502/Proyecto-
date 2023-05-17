<?php
require_once("modelo/index.php");
class modeloController{
	private $mode1;
	public function __construct(){
		$this ->mode1 = new Modelo();
	}
	// mostrar
	static functionindex(){
	$producto    = new Modelo();
	$ dato       =    $producto -> mostrar ("productos", "1")
	require_once("vista/index.php");
}
//nuevo
static function nuevo(){
require_once("vista/index. php");
}
//guardar
static function guardar(){
	$nombre= $_REQUEST[´nombe´];
	$precio= $_REQUEST[´precio´];
	$data = "´".$nombre."´,".$precio;
	$producto = new Modelo();
	$dato = $producto-> insertar("productos",$data);
	header("location:".urlsite);
	}

	//editar
	static function editar(){
	       $id = $_REQUEST['id'];
	       $producto = new Modelo();
	       $dato = $producto-> mostrar("productos","id=".$id);

	       require_once("vista/editar.php");
	      }
	      //actualizar
	      static function actualizar (){
	      	$id =$_REQUEST[´id´];
	      	$nombre= $_REQUEST[´nombre´];
	      	$precio= $_REQUEST[´precio´];
	      	$data = "nombre=´".$nombre."´,precio=".$precio;
	      	$producto = new Modelo();
	      	$dato = $producto->actualizar("productos",$data,"id=".
	              $id);
	      	header("location:".urlsite);
	      }

	      //eliminar
	      static function eliminar(){
	      	$id = $_REQUEST[´id´];
	      	$producto = $_REQUEST['id'];
	      	$producto = new Modelo();
	      	$dato = $producto->eliminar("producto", "id=".$id);
	      	header("location:".urlsite);


