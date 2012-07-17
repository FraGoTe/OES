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
		$passw = md5(mysql_real_escape_string($pass));
		$sql="SELECT * FROM usuario where usu_id = '$login' and usu_passw = '$passw';";
                
		$qReso = $this->DbConnect->query($sql);
		$i = 0;
                
		while($array=mysql_fetch_array($qReso,MYSQL_NUM))
		{
                 	$usucod = $array[0];
                        $usupass = $array[1];
			$estado = $array[2];
                        $rol = $array[3];
                        $alucod = $array[4];
			$i++;
		}
                if($i > 0)
		{
			session_start();
			$_SESSION["usucod"] = $usucod;
                        $_SESSION["usulogin"] = $login;
                        $_SESSION["usupass"] = $pass;
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
      
      public function actualizarPassword($pactual, $pnew, $pnew2){
          $seleccionaUsuario="SELECT * FROM usuario where usu_id='$pactual'";
          $alum = $this->DbConnect->query($seleccionaUsuario);
          $data = $this->DbConnect->fetchtoarray($alum);
          //var_dump($data);
          if(isset ($data[0]['usu_id']))
          {
              $codigo = $data[0]['usu_id'];
              if(($codigo != null)||($codigo==$pactual))
              {
                  if($pnew==$pnew2)
                  {
                      $sql = "update usuario set usu_passw=md5('$pnew') where usu_id='$codigo';";
                      $qReso = $this->DbConnect->query($sql);
                       echo "OK";
                  }
                  else
                  {
                      echo "NOCON";
                  }
              }
          }
              else
              {
                  echo "INCO";
              }
          
          /*
          $sql = "SELECT * FROM ALUMNO WHERE ALU_COD='$alu_esc'";
          $qReso = $this->DbConnect->query($sql);*/
          
      }
      public function resetearPassword($codigo){
          $seleccionaUsuario="update usuario set usu_passw=md5('$codigo') where usu_id='$codigo'";
          $alum = $this->DbConnect->query($seleccionaUsuario);
    }
      public function getuseq($usu)
      {
          $SQL = "select * from usuario where usu_passw = '".md5($usu)."'";
          $qReso = $this->DbConnect->query($SQL);
          $data = $this->DbConnect->fetchtoarray($qReso); 
          return $data;
      }
}

?>
