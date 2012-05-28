<?php
Class Actor extends Applicationbase{
	private $tabla="actor";
	private $codigo;
	public function listaActor(){
		$usuario=$this->leeRegistro($this->tabla,"","","estado desc,codigo","");
		return $usuario;
	}
	
	public function registraActor($data){
		$exito=False;
		$exito=$this->grabaRegistro($this->tabla,$data);
		return $exito;
	}
	
	public function actualizaActor($data,$filtro){
		return $this->actualizaRegistro($this->tabla,$data,$filtro);
	}
	
	public function codigoActor(){
		$col_codigo="CONCAT(DATE_FORMAT(NOW(),\"%y\"),LPAD((MAX(substring(`codigo`,3,5))+1),5,'0')) as codigo";
		$data=$this->leeRegistro($this->tabla,$col_codigo,"","");
		return $data[0]['codigo'];
	}
	
	public function muestraActor($idActor){
		$data=$this->leeRegistro($this->tabla,"","idActor=".$idActor."","","");
		return $data;
	}
	
	public function inactivaActor($idActor){
		return $this->inactivaRegistro($this->tabla,"idActor=".$idActor);
	}
	
	
	public function acorinActor($idActor){
		return $this->changecoloRegistro($this->tabla,"idActor=".$idActor);
	}
	
}
?>