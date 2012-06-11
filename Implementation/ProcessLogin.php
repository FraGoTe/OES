<?php
include '../Controllers/LoginController.php';

$ObjLogin = new Login();
$retorno = $ObjLogin->valida($_POST['username'], $_POST['password']);
echo $retorno;
?>
