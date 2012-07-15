<?php

include 'DbConnect.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author Peter Hernandez
 */
class Alumno1 { 
    
    public $DbConnect;
    
    public function Alumno1()
    {
        $ObjDbConnect = new DbConnect();
        $ObjDbConnect->connect();
        $this->DbConnect = $ObjDbConnect;
    }
    
    
    
    public function selectAlum1($codigo){
                $codigo = mysql_real_escape_string($codigo);
		
		$sql="SELECT alu_nom_completo FROM alumno where alu_cod = '$codigo';";
                
		$qReso = $this->DbConnect->query($sql);
		$i = 0;
                
		while($array=mysql_fetch_array($qReso,MYSQL_NUM))
		{
                 	$alumcod = $array[0];
			$escuela = $array[1];
                        $alunom = $array[3];
			$i++;
		}
                if($i > 0)
		{
			session_start();
			$_SESSION["alumcod"] = $alumcod;
			$_SESSION["escuela"] = $escuela;
                        $_SESSION["alunom"] = $alunom;
                        $_SESSION["active"] = true;
			return "found";
		}else{
                    return "notfound";
                }
	}
      public function getalumdata($alu_cod){
          $sql = "SELECT alu_nom_completo FROM alumno where alu_cod = '$alu_cod';";
          $qReso = $this->DbConnect->query($sql);
          $data = $this->DbConnect->fetchtoarray($qReso); 
          return $data;
      }
}

?>
