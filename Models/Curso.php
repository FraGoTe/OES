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
      public function getCursosxTomar($ALU_COD){
        $sql = "select distinct(cur_cod) from prerequisito p
                where p.req_cod in(
                select cur_cod from curso_alumno where alu_cod='$ALU_COD'
                ) and p.esc_cod = '{$_SESSION["escuela"]}'
                order by cur_cod";
        $qResp = $this->DbConnect->query($sql);
        return $this->DbConnect->fetchtoarray($qResp);
    }
      public function getcursosrequ($cur)
    {
        $sql = "SELECT req_cod FROM prerequisito where cur_cod='$cur';";
        $qResp = $this->DbConnect->query($sql);
        return $this->DbConnect->fetchtoarray($qResp);
    }
    public function cursospasados($curreq,$alucod)
    {
        $sql = "SELECT * FROM CURSO_ALUMNO WHERE ALU_COD='$alucod' 
                AND CUR_COD='$curreq' AND CUA_ESTADO='A';";
        $qResp = $this->DbConnect->query($sql);
        return (@$this->DbConnect->fetchtoarray($qResp)?true:false);
    }
     public function getCursosTodos($ALU_COD, $cursos){
        $SQL = "SELECT CUR.* FROM CURSO CUR
        INNER JOIN ALUMNO AL ON AL.ALU_ESC = CUR.ESC_COD
        WHERE AL.ALU_COD='$ALU_COD' AND
        CUR.CUR_COD IN ($cursos)
        AND NOT EXISTS (
        SELECT 1 FROM CURSO_ALUMNO CUA WHERE CUA.CUR_COD = CUR.CUR_COD
        AND CUA.ALU_COD = AL.ALU_COD AND CUA.CUA_ESTADO = 'A')
        ORDER BY CUR_SEM, CUR.CUR_CICLO, CUR_NOM";
        $qResp = $this->DbConnect->fetchAlltoArray($SQL);
        return  $qResp;
    }
      public function getCursosTomar($cursos){
             $sql = "select distinct(pr.cur_cod), cu.cur_ciclo  from prerequisito pr
                inner join curso cu on cu.cur_cod = pr.req_cod
                where pr.req_cod in( $cursos ) 
                order by cu.cur_ciclo, pr.cur_cod;";
       /* $sql = "select distinct(cur_cod) from prerequisito
                where req_cod in(
                $cursos
                )
                order by cur_cod";
        */
        $qResp = $this->DbConnect->query($sql);
        return $this->DbConnect->fetchtoarray($qResp);
    }
     public function getCursosCiclo($ALU_COD, $cursos){
        $SQL = "SELECT distinct(CUR.CUR_CICLO) FROM CURSO CUR
        INNER JOIN ALUMNO AL ON AL.ALU_ESC = CUR.ESC_COD
        WHERE AL.ALU_COD='$ALU_COD' AND
        CUR.CUR_COD IN ($cursos)
        AND NOT EXISTS (
        SELECT 1 FROM CURSO_ALUMNO CUA WHERE CUA.CUR_COD = CUR.CUR_COD
        AND CUA.ALU_COD = AL.ALU_COD AND CUA.CUA_ESTADO = 'A')
        ORDER BY CUR.CUR_CICLO";
        $qResp = $this->DbConnect->fetchAlltoArray($SQL);
        return  $qResp;
    }
}

?>
