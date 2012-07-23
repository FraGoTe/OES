<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";

    session_start(); 
    $ObjUsuario = new Usuario();
    echo $ObjUsuario->actualizarPassword($_SESSION['usucod'], $_SESSION['usupass'], $_REQUEST['passactual'], $_REQUEST['passnew1'], $_REQUEST['passnew2']);
?>
