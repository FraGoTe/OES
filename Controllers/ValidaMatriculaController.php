<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";


class ValidaMatricula{

    function __construct() {
        
    }

    function Valida($alucod)
    {
       $objAlumno = new Alumno();
       return $objAlumno->getestado($alucod);
    }
}

?>
