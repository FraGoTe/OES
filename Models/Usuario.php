<?php

require_once 'DbConnect.php';

/**
 * Description of Usuario
 *
 * @author FraGoTe
 */
class Usuario {
    
    public $DbConnect;
    
    public function Usuario()
    {
        $ObjDbConnect = new DbConnect();
        $ObjDbConnect->connect();
        $this->DbConnect = $ObjDbConnect;
    }
    
    public function selectUser($login,$pass){
                $login = mysql_real_escape_string($login);
		$pass = md5(mysql_real_escape_string($pass));
		$sql="SELECT * FROM usuario where usu_id = '$login' and usu_passw = '$pass';";
                
		$qReso = $this->DbConnect->query($sql);
		$i = 0;
                
		while($array=mysql_fetch_array($qReso,MYSQL_NUM))
		{
                 	$usucod = $array[0];
			$estado = $array[2];
                        $rol = $array[3];
                        $alucod = $array[4];
			$i++;
		}
                if($i > 0)
		{
			session_start();
			$_SESSION["usucod"] = $usucod;
                        $_SESSION["alu_cod"] = $alucod;
			$_SESSION["estado"] = $estado;
                        $_SESSION["rol"] = $rol;
                        $_SESSION["active"] = true;
                           return "found";
		}else{
                    return "notfound";
                }
	}
        
      public function getuserdata($alu_esc){
          $sql = "SELECT * FROM ALUMNO WHERE ALU_COD='$alu_esc'";
          $qReso = $this->DbConnect->query($sql);
          $data = $this->DbConnect->fetchtoarray($qReso); 
          return $data;
      }
}

?>
