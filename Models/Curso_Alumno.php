<?php
require_once 'DbConnect.php';
/**
 * Description of Curso_Alumno
 *
 * @author FraGoTe
 */
class Curso_Alumno {
    
    public $DbConnect;
    
    public function Curso_Alumno()
    {
        $ObjDbConnect = new DbConnect();
        $ObjDbConnect->connect();
        $this->DbConnect = $ObjDbConnect;
    }
    public function getCursosTomados($ALU_COD){
       $sql = "SELECT * FROM CURSO_ALUMNO WHERE ALU_COD='$ALU_COD'";
       $qResp = $this->DbConnect->query($sql);
       return $this->DbConnect->fetchtoarray($qResp);
    }
}

?>
