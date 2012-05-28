<?php
Class Actor extends Applicationbase{
	private $tabla="usuario";
	private $codigo;
	public function listaActor(){
		$usuario=$this->leeRegistro($this->tabla,"","","codigo","");
		return $usuario;
	}
	
	public function registraActor($data){
		$exito=False;
		$exito=$this->grabaRegistro($this->tabla,$data);
		return $exito;
	}
	public function codigoActor(){
		$col_codigo="CONCAT(DATE_FORMAT(NOW(),\"%y\"),LPAD((MAX(substring(`codigo`,3,5))+1),5,'0')) as codigo";
		$data=$this->leeRegistro($this->tabla,$col_codigo,"","");
		return $data[0]['codigo'];
	}
}
?>