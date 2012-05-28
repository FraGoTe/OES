<?php
Class IndexController extends ApplicationGeneral{
	function index(){
		$this->view->show('index.php', $datos);
	}
}
?>

