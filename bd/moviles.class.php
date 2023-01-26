<?php

class moviles extends base{
	
//PROPIEDADES BASE DE DATOS
  private $id;
  private $modelo;
  private $marca;
  private $stock;
    

//PROPIEDADES MODELO
  private $table;
  private $Rows;	

//PROPIEDADES DISEÑO
  private $num_error;
  private $evento;	
  private $msg;
	
public function __construct(){
	$this->base();
	$this->id = "0";
	$this->modelo = "";
	$this->marca = "";
	$this->stock = "";
	$this->table = "moviles";
	$this->Rows = 0;
	$this->msg = "";

	date_default_timezone_set("America/Bogota");
	}
	
//SETTERS

public function set_id($id){
	$this->id = $id;
	return true;	
	}
public function set_modelo($modelo){
	$this->modelo = $modelo;
	return true;
	}	
public function set_marca($marca){
	$this->marca = $marca;
	return true;
	}	
public function set_stock($stock){
	$this->stock = $stock;
	return true;
	}
//FIN SETTERS

// GETTERS

public function get_id(){
	return $this->id;
    }
public function get_modelo(){
	return $this->modelo;
	}	
public function get_marca(){
	return $this->marca;
	}	
public function get_stock(){
	return $this->stock;
	}	
public function get_Rows(){
	return $this->Rows;
	}
public function get_msg(){
	return $this->msg;
	}
//FIN GETTERS	
	
public function listado_moviles(){
	
	$sql = "SELECT * FROM {$this->table} ORDER BY id ASC";
	$rs = $this->conexion->execute($sql);
	
	$arreglo = array();
	
	while(!$rs->EOF){
		$id = $rs->fields["id"];
		$stock =$rs->fields["stock"];
		$modelo = $rs->fields["modelo"];
		$marca = $rs->fields["marca"];


		$arreglo[] = array('id' => $id,'modelo' => $modelo, 'marca' => $marca, 'stock' => $stock);
		$rs->MoveNext();
		}
	return $arreglo;
	
	}

public function store(){

	$flag = false;
	$params = array();
	$id = 0;

	$params[] = $this->marca;
	$params[] = $this->modelo;
	$params[] = $this->stock;	

	$sql = "INSERT INTO {$this->table} (marca,modelo,stock) ";
	$sql.= "VALUES (?,?,?)";
	$this->conexion->StartTrans();
    $this->conexion->execute($sql,$params);
	$flag = $this->conexion->CompleteTrans();

	if ($flag){
		return 1;
	}
		return 2;
}

public function update(){

	$flag = false;
	$params = array();
	$id = 0;

	$params[] = $this->marca;
	$params[] = $this->modelo;
	$params[] = $this->stock;

	$sql ="UPDATE {$this->table} SET marca=(?),modelo=(?),stock=(?) ";
	$sql.="WHERE id = {$this->id}";
	$this->conexion->StartTrans();
	$this->conexion->execute($sql,$params);
	$flag = $this->conexion->CompleteTrans();

	if ($flag){
		return 1;
	}
		return 2;
  }

  public function delete(){
	
	$sql = "DELETE FROM {$this->table} WHERE id = {$this->id}";
	
	$this->conexion->StartTrans();
	$this->conexion->execute($sql);
	$this->conexion->CompleteTrans();

	}

}
// FIN CLASE

?>