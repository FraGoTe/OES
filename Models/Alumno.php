<?php

require_once 'DbConnect.php';

/**
 * Description of Alumno
 *
 * @author FraGoTe
 */
class Alumno {
   
    public $DbConnect;
    
    public function Alumno()
    {
        $ObjDbConnect = new DbConnect();
        $ObjDbConnect->connect();
        $this->DbConnect = $ObjDbConnect;
    }
    
    public function getAluData($ALU_COD){
        $SQL = "SELECT * FROM ALUMNO WHERE ALU_COD='$ALU_COD'";
        $qResp = $this->DbConnect->fetchAlltoArray($SQL);
        return  $qResp;
    }
}

?>
