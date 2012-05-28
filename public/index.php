<?php
//Load Session
session_register('queryTemp', 'dumps', 'session_data');
//Dispatch url from QueryString
$url_items = explode("/", $_REQUEST['url']);
$_REQUEST['controlador'] = $url_items[0]; 
$_REQUEST['accion'] = $url_items[1]; 
$_REQUEST['id'] = $url_items[2];
$_REQUEST['all_parameters'] = $url_items;
//definiendo los layouts
define(top,"/../top.php");
define(bottom,"/../bottom.php");
//En data_params quedan los valores de parametros por URL 
unset($url_items[0], $url_items[1]);
$_REQUEST['parameters'] = array_values($url_items);

$_REQUEST['controlador'] = escapeshellcmd($_REQUEST['controlador']);
$_REQUEST['accion'] = escapeshellcmd($_REQUEST['accion']);

$_POST['accion'] = $_GET['accion'] = $_REQUEST['accion'];
$_POST['controlador'] = $_GET['controlador'] = $_REQUEST['controlador'];

/** reinicia las variables de aplicaci�n cuando cambiamos 
 * entre una aplicaci�n y otra
 */
chdir('..');
$delete_session_cache = false;
$path = join(array_slice(split( "/" ,dirname($_SERVER['PHP_SELF'])),1,-1),"/");
if($path!=$_SESSION['WEBCONCEPTOS_PATH']){
	$delete_session_cache = true;
}
$_SESSION['WEBCONCEPTOS_PATH'] = $path;
if($_SESSION['WEBCONCEPTOS_PATH']){
	define('WEBCONCEPTOS_PATH', "/".$_SESSION['WEBCONCEPTOS_PATH']."/"); 
} else {
	define('WEBCONCEPTOS_PATH', "/"); 
}

//Incluimos el FrontController
require 'b.libs/WCController.php';
//Lo iniciamos con su método estático main.
WCController::main();


?>

