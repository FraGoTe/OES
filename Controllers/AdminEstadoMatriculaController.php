<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}./Models/Alumno.php";

class AdminEstadoMatriculaController {
    
    function __construct() {
        
    }
    
       public function getuserdata1($variable){
           $objalumno = new Alumno();
           $data1 = $objalumno->getAluData1($variable);
           return $data1;
        }
        public function getuserestado($variable){
           $objalumno = new Alumno();
           $data2 = $objalumno->getestado($variable);
           return $data2;
        }


}

?>
