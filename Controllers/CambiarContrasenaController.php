<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";

      
    $ObjUsuario = new Usuario();
    $ObjUsuario->actualizarPassword($_REQUEST['passactual'], $_REQUEST['passnew1'], $_REQUEST['passnew2']);
?>
