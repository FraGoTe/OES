<?php
include "{$_SERVER['DOCUMENT_ROOT']}/Models/Usuario.php";

$objUsuario = new Usuario();

if(@$objUsuario->getuseq($_SESSION['alu_cod']))
        echo "SI";
else
        echo "NO";

?>
