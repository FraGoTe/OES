<?php

require_once 'DbConnect.php';
/**
 * Description of Curso
 *
 * @author FraGoTe
 */
class Curso {
    
    public $DbConnect;
    
    public function Curso()
    {
        $ObjDbConnect = new DbConnect();
        $ObjDbConnect->connect();
        $this->DbConnect = $ObjDbConnect;
    }
    
    public function getCursosCachimbos($ALU_COD){
        $SQL = "SELECT CUR.* FROM CURSO CUR
                INNER JOIN ALUMNO AL ON AL.ALU_ESC = CUR.ESC_COD
                WHERE AL.ALU_COD='$ALU_COD' AND CUR.CUR_CICLO IN ('I','II')
                ORDER BY CUR.CUR_CICLO, CUR_NOM";
        $qResp = $this->DbConnect->fetchAlltoArray($SQL);
        return  $qResp;
    }
}

?>
