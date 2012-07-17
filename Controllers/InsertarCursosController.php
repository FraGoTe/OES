<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";


class InsertarCursos{

    function __construct() {
        
    }

    function Inserta($string)
    {
        session_start();
        
        if(strlen($string)<=0){
            return 0;
        }
        $objAlum = new Alumno();
        $i = 0;
        $centi = 0;
        $cadenaG = explode("||data||", $string);
        foreach($cadenaG as $cursos)
            if(strlen(@$cursos)>0)
                {
                    $campos = explode("*",$cursos);
                    foreach($campos as $campo)
                        if(strlen($campo)>0)
                            {
                            $fields = explode("=",$campo);
                            $inserts[$i][$fields[0]] = $fields[1];
                            }
                     $i++;
                }                
        if(!empty($inserts))
        {
           
            foreach($inserts as $val)
                {
                  $sql = "INSERT INTO CURSO_ALUMNO(";
                    $j = 0;
                    $fields = "";
                    $value = "";
                    foreach($val as $key=>$valor)
                    {    
                            if($j == 0)
                            { 
                                $fields .= "alu_cod,".$key;
                                $value .= "'{$_SESSION['alu_cod']}','$valor'";
                            }else{
                                $fields.=",{$key}";
                                if($key=='cua_vez')
                                    $value.=",{$valor}";
                                else
                                    $value.=",'{$valor}'";
                            }
                            $j++;
                    }
                  $sql .= $fields.") VALUES (".$value.")";  
                    $centi+=$objAlum->insertCursoAlu($sql);
                }
             if($centi>0)
             {
                 $sqlQ = "INSERT INTO MATRICULA (MAT_ANIO, MAT_ESTADO, MAT_FECHA, ALU_COD)
                          VALUES ('2012','S',now(),'{$_SESSION['alu_cod']}')";
               $objAlum->insertCursoAlu($sqlQ);
             }else{
                echo "<b>Error</b>";   
             }    
        }
    }
}

?>
