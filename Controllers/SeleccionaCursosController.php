<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Curso_Alumno.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Curso.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php"; 
/**
 * Description of SeleccionaCurso
 *
 * @author FraGoTe
 */
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
                 $turno = 'M';
                 $seccion = 'A';
                 $checkval = "||data||cua_per=2012-{$curso['cur_sem']}*cur_cod={$curso['cur_cod']}*esc_cod={$curso['esc_cod']}*cua_turn=$turno*cua_sec=$seccion"; 
                $cur .= "<tr>
                    <td>2013-{$curso['cur_sem']}</td>
                    <td>{$curso['cur_cod']}</td>
                    <td>$turno</td>
                    <td>$seccion</td>
                    <td>{$curso['cur_nom']}</td>
                    <td>{$curso['cur_cred']}</td>
                    <td></td>
                    <td><input type='checkbox' disabled='disabled' checked='checked' value='$checkval' /></td>
                    </tr>";
                    $totalCred +=$curso['cur_cred'];
                }   
            }
        }else{
            
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
