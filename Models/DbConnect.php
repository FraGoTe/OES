<?php
	class DbConnect
	{
		var $Servidor;
		var $DataBase;
		var $Usuario;
		var $Passw;
		
		var $Conexion_ID=0;
		var $Consulta_ID=0;
		var $Errno=0;
		var $Error="";
                
		function DbConnect($db="matricula",$host="localhost",$user="root",$pass="")
		{
			$this->Servidor = $host;
			$this->DataBase = $db;
			$this->Usuario = $user;
			$this->Passw = $pass;
			
		}
		
		function connect()
		{
			
			$this->Conexion_ID=mysql_connect($this->Servidor,$this->Usuario,$this->Passw) or die(mysql_error());
			
			if(!$this->Conexion_ID)
			{
				$this->Error='Conexion Fallida';
				return 0;
			}
			
			if(!mysql_select_db($this->DataBase,$this->Conexion_ID))
			{
				$this->Error=$this->DataBase.' Imposible abrir';
				return 0;
			}
			
			return $this->Conexion_ID;
		}
		
		function query($sql)
		{
			if($sql=="")
			{
				$this->Error="Consulta no especificada";
				return 0;
			}
                       
		        $this->Consulta_ID = mysql_query($sql,$this->Conexion_ID) or die(mysql_error());
                
                       if(!$this->Consulta_ID)
			{
				$this->Errno=mysql_errno();
				$this->Error=mysql_error();
			}
			
			return $this->Consulta_ID;
		}
	}

?>