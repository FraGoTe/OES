<?php
/**
 * Description of SeleccionaCurso
 *
 * @author FraGoTe
 */
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Curso_Alumno.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Curso.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php"; 
class SeleccionaCursos {
    
    public $datamatri;
    
    public function getCursos($alu_cod){
        $objCurso_Usuario = new Curso_Alumno();
        $objCurso = new Curso();
        //Obteniendo los cursos tomados por el alumno
        $cursosTaken = $objCurso_Usuario->getCursosTomados($alu_cod);
    
        if(!$cursosTaken){
            //Es un cachimbo
            $cur = "";
            $totalCred = 0;
            foreach($objCurso->getCursosCachimbos($alu_cod) as $curso){
                if(@$curso){
                 $curnom = utf8_encode($curso['cur_nom']);
                 $turno = 'M';
                 $seccion = 'A';
                 $checkval = "||data||cua_per=2012-{$curso['cur_sem']}*cur_cod={$curso['cur_cod']}*esc_cod={$curso['esc_cod']}*cua_turn=$turno*cua_sec=$seccion"; 
                $cur .= "<tr>
                    <td>2012-{$curso['cur_sem']}</td>
                    <td>{$curso['cur_cod']}</td>
                    <td>$turno</td>
                    <td>$seccion</td>
                    <td>{$curnom}</td>
                    <td>{$curso['cur_cred']}</td>
                    <td></td>
                    <td><input type='checkbox' disabled='disabled' checked='checked' value='$checkval' /></td>
                    </tr>";
                    $totalCred +=$curso['cur_cred'];
                }   
            }
        }else{
            $cursoxtomar = $objCurso->getCursosxTomar($alu_cod);
            
            $cursos = array();
            
            foreach($cursoxtomar as $cursononsecure)
            {
                $cursosxreview = $objCurso->getcursosrequ($cursononsecure['cur_cod']);
                
                $variab = true;
                foreach($cursosxreview as $curreview)
                {
                  $variab = $objCurso->cursospasados($curreview['req_cod'], $alu_cod);
                }

                if($variab)
                 $cursos[] = $cursononsecure['cur_cod'];
            }
            //Cursos Primer Semestre
            $takenCourses = $cursos;
            
            // Concatenando Cursos del Primer Semestre
            $i = 1;
            $ConcatCur = "";
            foreach($cursos as $curso)
            {
                $coma = ($i == 1)?"":","; 
                $ConcatCur .= $coma."'".$curso."'";
                $i++;
            }
            
            //Agregando los cursos del primer Semestre
            $cursosTomar = $objCurso->getCursosTomar($ConcatCur);
            
            foreach($cursosTomar as $cursononsecure)
            {
                $cursosxreview = $objCurso->getcursosrequ($cursononsecure['cur_cod']);
                
                $variab = true;
                foreach($cursosxreview as $curreview)
                {  
                    if(in_array(trim($curreview['req_cod']), $takenCourses))
                            $variab = true;
                   else
                    $variab = $objCurso->cursospasados($curreview['req_cod'], $alu_cod);
                 
                }

                if($variab)
                 $cursos[] = $cursononsecure['cur_cod'];
            }
            
            // Concatenando Cursos Totales
            $i = 1;
            $ConcatCur = "";
            
            foreach($cursos as $curso)
            {
                $coma = ($i == 1)?"":","; 
                $ConcatCur .= $coma."'".$curso."'";
                $i++;
            }
            
             $AllCursos = $objCurso->getCursosTodos($alu_cod, $ConcatCur);
             
             $CursoCiclo = $objCurso->getCursosCiclo($alu_cod, $ConcatCur);
             
             $j = 1;
             $ciclos = array();
             foreach($CursoCiclo as $Cciclo)
             {
                 if($Cciclo['CUR_CICLO'] != '*')
                 {
                     if($j<3)
                     $ciclos[] = $Cciclo['CUR_CICLO'];
                     $j++;
                 }
             }
             
             $cur = "";
             $totalCred = 0;
           //  var_Dump($AllCursos);exit;
              foreach($AllCursos as $curso){
                if(@$curso){
                 $check = (in_array($curso['cur_ciclo'], $ciclos)?" disabled='disabled' checked='checked'":"");
                 $curnom = utf8_encode($curso['cur_nom']);
                 $turno = 'M';
                 $seccion = 'A';
                 $checkval = "||data||cua_per=2013-{$curso['cur_sem']}*cur_cod={$curso['cur_cod']}*esc_cod={$curso['esc_cod']}*cua_turn=$turno*cua_sec=$seccion"; 
                $cur .= "<tr>
                    <td>2013-{$curso['cur_sem']}</td>
                    <td>{$curso['cur_cod']}</td>
                    <td>$turno</td>
                    <td>$seccion</td>
                    <td>{$curnom}</td>
                    <td>{$curso['cur_cred']}</td>
                    <td></td>
                    <td><input type='checkbox' $check value='$checkval' /></td>
                    </tr>";
                    if(strlen($check)>0)
                    $totalCred +=$curso['cur_cred'];
                }   
            }
             
        }
        $cur.="<tr>
                <tr>
                  <td colspan='5'>Total de Cr&eacute;ditos</td>
                  <td>$totalCred</td>
                  <td></td>
                   <td></td>
                </tr>
              </tr>";
        return $cur;
    }
    
    public function getpreview(){
        
        $objAlumno = new Alumno();
       // session_start();
        
        $AluData = $objAlumno->getAluData($_SESSION['alu_cod']);
/*
        $array = explode('**',$cadena);
        $i=0;
        foreach($array as $arrayito){   
            if(@$arrayito){
                $arrayin = explode('*',$arrayito);                
                    if(@$arrayin && $arrayin[0]!='data='){
                        foreach($arrayin as $arrayinininin){
                            $arrayinin = explode('=',$arrayinininin);
                            switch($arrayinin[0]){
                                 case 'cur_nom':
                                    $arrayon[$i]['asig']=$arrayinin[1];
                                    break;
                                case 'cua_per':
                                    $arrayon[$i]['per']=$arrayinin[1];
                                    break;
                                case 'cur_cod':
                                    $arrayon[$i]['cod']=$arrayinin[1];
                                    break;
                                case 'cua_turn':
                                    $arrayon[$i]['tur']=$arrayinin[1];
                                    break;
                                 case 'cua_sec':
                                    $arrayon[$i]['sec']=$arrayinin[1];
                                    break;
                                case 'cua_vez':
                                    $arrayon[$i]['vez']=$arrayinin[1];
                                    break;
                                case 'cur_cred':
                                    $arrayon[$i]['cre']=$arrayinin[1];
                                    break;
                            }
                        }
                    }
            }
          $i++;
        }
        $this->datamatri = $arrayon;
        $datas = "";
        foreach($arrayon as $arr)
         $datas .= "{per:'{$arr['per']}',cod:'{$arr['cod']}',tur:'{$arr['tur']}',
                     sec:'{$arr['sec']}',asig:'{$arr['asig']}',cre:'{$arr['cre']}',
                     vez:'{$arr['vez']}'},";
*/
        $datos = array($AluData, '');
                     
        return $datos;
    }
}

?>
