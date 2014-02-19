<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";

        $objUsuario = new Usuario();

        
        $objUsuario->resetearPassword($_REQUEST['alu_cod']);
?>
