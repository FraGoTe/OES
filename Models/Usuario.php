<?php

require_once 'DbConnect.php';


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
		$sql="SELECT * FROM usuario  u
                inner join alumno al on al.alu_cod=u.alu_cod
                where u.usu_id = '$login' and u.usu_passw = '$passw';";
                
		$qReso = $this->DbConnect->query($sql);
		$i = 0;
                
		while($array=mysql_fetch_array($qReso,MYSQL_NUM))
		{
                 	$usucod = $array[0];
                        $usupass = $array[1];
			$estado = $array[2];
                        $rol = $array[3];
                        $alucod = $array[4];
                        $nombre = $array[8];
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
                        $_SESSION["nombre"] = utf8_encode($nombre);
                        if($rol=="alum")
                        {
                            $encriptado=$this->generarPass($usucod);
                            $_SESSION["passencript"] = $encriptado;
                        }
                            
                        
                            
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
      public function resetearPassword($codigo)
      {
          $seleccionaUsuario="update usuario set usu_passw=md5('$codigo') where usu_id='$codigo'";
          $alum = $this->DbConnect->query($seleccionaUsuario);
      }
      public function getuseq($usu)
      {
          if($usu=="unfv")
            $SQL = "select * from usuario where usu_passw = '".md5($usu)."'";
          else
          {
              $encriptar=$this->generarPass($usu);
              $SQL = "select * from usuario where usu_passw = '".md5($encriptar)."'";
          }
          $qReso = $this->DbConnect->query($SQL);
          $data = $this->DbConnect->fetchtoarray($qReso); 
          return $data;
      }
      
      public function generarPass($cod)
      {
          $x=$cod;
          $tamanio=strlen($x);
          $codigo=array();
          $letra = array('M','A','X','N','Y','E','P','Z','I','R');

            if($tamanio==10)
            {
                $j=9;
                for($i=0; $i<$tamanio-3; $i++)
                {
                    $codigo[$i]=$x[$j];
                    --$j; 
                } 
            }
            else
            {
                $j=6;
                for($i=0; $i<$tamanio; $i++)
                {
                    $codigo[$i]=$x[$j];
                    --$j;
                }    
            }

            //SUMAMOS 1 A LOS PARES Y RESTAMOS 1 A LOS IMPARES
            for($i=0; $i<7; $i++)
            {   
                if($codigo[$i]%2==0)        
                    ++$codigo[$i];
                else
                    --$codigo[$i];
            }

            for($i=0; $i<7; $i++)
            {
                for($j=0; $j<10; $j++)
                        if(($codigo[$i]==$j)&&(($i==0)||($i==3)||($i==4)||($i==5)))
                            $codigo[$i]=$letra[$j];  
            }

            $encriptado=$codigo[0].$codigo[1].$codigo[2].$codigo[3].$codigo[4].$codigo[5].$codigo[6];
      
          return $encriptado;
      }
}

?>
