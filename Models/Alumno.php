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
    
        
    public function getAluData1($escuela){//$alu_esc
        IF ($escuela== 'II')
            $SQL1 = "SELECT * FROM ALUMNO";//
        ELSE
            $SQL1 = "SELECT * FROM ALUMNO WHERE alu_esc='$escuela'";//SOLO INFORMATICA
        //$SQL = "SELECT * FROM ALUMNO WHERE alu_esc='$alu_esc'";//SOLO INFORMATICA
        $qResp1 = $this->DbConnect->fetchAlltoArray($SQL1);
        return  $qResp1;
    }
    
    public function getAluData($ALU_COD){
        $SQL = "SELECT * FROM ALUMNO WHERE ALU_COD='$ALU_COD'";
        $qResp = $this->DbConnect->fetchAlltoArray($SQL);
        return  $qResp;
    }
    public function getestado($ALU_COD){
        $SQL2 = mysql_query("SELECT mat_estado FROM  matricula WHERE alu_cod='$ALU_COD'");
        $qResp2 = mysql_fetch_array($SQL2);
        if($qResp2[0]=="")
            return "No matriculado";
        else
            return  $qResp2[0];
    }
}

?>
