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
    
        
    public function getAluxEscuela($escuela,$start,$limit,$sidx,$sord){//$alu_esc
        if($start<0) $start=1;
            $SQL1 = "SELECT AL.ALU_COD, MAT.MAT_ESTADO,AL.ALU_NOM_COMPLETO
                        FROM ALUMNO AL 
                       LEFT JOIN MATRICULA MAT 
                       ON MAT.MAT_ANIO='2012' AND MAT.ALU_COD=AL.ALU_COD 
                       WHERE  AL.ALU_ESC='$escuela' AND MAT.MAT_ESTADO <> 'NULL' 
                        ORDER BY $sidx $sord LIMIT $start , $limit
                        ";
        $qResp1 = $this->DbConnect->fetchAlltoArray($SQL1);
        return  $qResp1;
    }
    
    public function getAllAluxEscuela($escuela){//$alu_esc
            $SQL1 = "SELECT AL.ALU_COD, MAT.MAT_ESTADO,AL.ALU_NOM_COMPLETO
                        FROM ALUMNO AL 
                       LEFT JOIN MATRICULA MAT 
                       ON MAT.MAT_ANIO='2012' AND MAT.ALU_COD=AL.ALU_COD 
                       WHERE  AL.ALU_ESC='$escuela' AND MAT.MAT_ESTADO <> 'NULL' 
                        ";
        $qResp1 = $this->DbConnect->fetchAlltoArray($SQL1);
        return  $qResp1;
    }
    
    public function getAllCursos($alucod){
            $SQL1 = "SELECT CUR.cur_ciclo, CUR.cur_cod, CUR.cur_sem, CUR.cur_tipo , CUR.cur_nom, CUR.cur_cred, CUR.esc_cod FROM CURSO CUR
                INNER JOIN ALUMNO AL ON AL.ALU_ESC = CUR.ESC_COD
                WHERE AL.ALU_COD='$alucod' AND CUR.CUR_CICLO IN ('I','II')
                ORDER BY CUR.CUR_CICLO, CUR_NOM";
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
