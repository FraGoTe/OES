<?php

include '../Models/Usuario.php';

class Login{

    function __construct() {
        
    }

    function valida($username, $password)
    {
        $ObjUsuario = new Usuario();
        $value = $ObjUsuario->selectUser($username, $password);
        return $value;
    }
}

?>
