<?php
Class Applicationbase{
	var $localhost = "localhost";
	var $usuario_BD="root";
	var $clave_BD="";
	var $basedatos="matricula";
		
	public function conectar(){	
		mysql_connect($this->localhost,$this->usuario_BD,$this->clave_BD) or die("Error al conectar :".mysql_error());
		mysql_select_db($this->basedatos) or die("Error al elegir la BBDD :".mysql_error());;
	}
	
	public function desconectar(){
		mysql_close() or die("Error al intentar desconectar del servidor de BBDD : ".mysql_error());	
	}
	
	protected function leeRegistro($tabla,$columnas,$filtro,$orden,$opciones=""){
		$tabla=strtolower($tabla);
		if(empty($columnas)){$columnas="*";}
		$sql="Select ".$columnas." from ".$tabla;
		if(!empty($filtro)){ $sql.=" where ".$filtro; }
		if(!empty($orden)){ $sql.=" order by ".$orden; }
		if(!empty($opciones)){ $sql.=" ".$opciones; }			
		$this->conectar();
		$resultado=mysql_query($sql) or die(mysql_error());
		if($resultado){
			$num_resultado=mysql_num_rows($resultado);
			for($i=0;$i<$num_resultado;$i++){
				$fila=mysql_fetch_array($resultado);
				$data[]=$fila;
			}
			$this->desconectar();
			return $data;
		}
		else{
			return mysql_error();
		}
	}
	
	protected function grabaRegistro($tabla,$data){
		$tabla=strtolower($tabla);
		$columnas=array_keys($data);
		$sql="Insert Into ".$tabla."(";
		for($i=0;$i<count($columnas);$i++){
			$sql.=$columnas[$i].",";
		}
		$sql.="FechaCreacion,UsuarioCreacion) ";
		$sql.="values(";
		for($i=0;$i<count($data);$i++){
			$sql.="'".$data[$columnas[$i]]."',";
		}
		$sql.="Now(),1)";
		$this->conectar();
		$resultado=mysql_query($sql) or die(mysql_error());
		$this->desconectar();
		if($resultado){
			return true;
		}
		else {
			return false;
		}
	}
	
	protected function actualizaRegistro($tabla,$data,$filtro){
		$tabla=strtolower($tabla);
		$columnas=array_keys($data);
		$sql="Update ".$tabla." set ";
		for($i=0;$i<count($columnas);$i++){
			$sql.=$columnas[$i]."='".$data[$columnas[$i]]."',";
		}
		$sql.="FechaModificacion=Now() , UsuarioModificacion='1'";
		$sql.="Where ".$filtro;
		$this->conectar();
		$resultado=mysql_query($sql);
		$this->desconectar();
		if($resultado){
			return True;
		}
		else {
			return false;
		}
		
}
	
	protected function inactivaRegistro($tabla,$filtro){
		$tabla=strtolower($tabla);
		$sql="Update ".$tabla." set Estado=0 ";
		if(!empty($filtro)){	
			$sql.=" Where ".$filtro;
		}
		$this->conectar();
		$resultado=mysql_query($sql) or die(mysql_error());	
		if($resultado){
			$mensaje="El registro se borro con Exito";
		}
		else {
			$mensaje="No se consiguio borrar el registro";
		}
		$this->desconectar();
		return $mensaje;	
	}
	
	protected function changecoloRegistro($tabla,$filtro){
		$tabla=strtolower($tabla);
		$sql="Update ".$tabla." set Estado=ABS((Estado-1)*(-1) )";
		if(!empty($filtro)){	
			$sql.=" Where ".$filtro;
		}
		$this->conectar();
		$resultado=mysql_query($sql) or die(mysql_error());	
		if($resultado){
			return true;
		}
		else {
		    return false;
		}
		$this->desconectar();
	}

	protected function eliminaRegistro($tabla,$filtro){
		$tabla=strtolower($tabla);
		$sql="Delete from ".$tabla." ";
		if(!empty($filtro)){	
			$sql.=" Where ".$filtro;
		}
		$this->conectar();
		$resultado=mysql_query($sql);	
		if($resultado){
			session_start();
			$_SESSION['mensaje']="<table><tr><td>Acción exitosa: registro borrado</td></tr></table>";
		}
		else {
			session_start();
			$_SESSION['mensaje']="<table><tr><td>Acción fallida: ".ErrorMysql(mysql_errno())."</td></tr></table>";
		}
		$this->desconectar();	
	}
        
        protected function comparePass($tabla, $datos){
            $username = mysql_real_escape_string($data['username']);
            $password = hash('sha512', $data['password']);
            $this->conectar();
            $result = mysql_query("SELECT * FROM {$tabla} WHERE username = '$username' AND password = '$password'");
            $this->desconectar();
            return mysql_num_rows($result); 
        }
        
         protected function listUsers(){
            $this->conectar();
            $result = mysql_query("SELECT * FROM USUARIO") or die(mysql_error());

		if($result){
                    while ($fila=mysql_fetch_assoc($result)){
                               $data[]=$fila;
                            }
			$this->desconectar();
			return $data;
		}
		else{
			return mysql_error();
		}
        }
        
	
	
} 
?>
