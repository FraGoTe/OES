<?php
Class ActorController extends ApplicationGeneral{
	function formulario(){
		$this->view->show("login/registro.phtml");
	}
	function grabausuario(){
		$data['apaterno']=$_REQUEST['apaterno'];
		$data['amaterno']=$_REQUEST['amaterno'];
		$data['nombres']=$_REQUEST['nombres'];
		$data['fechanac']=$_REQUEST['fechanac'];
		$data['email']=$_REQUEST['email'];
		$accion=New Actor();
		$data['codigo']=$accion->codigoActor();
		$data['estado']=1;
		$exito=$accion->registraActor($data);
		if($exito){
			$resultado['mensaje']="Grabo con éxito";
		}
		else{
			$resultado['mensaje']="Revisar el proceso";
		}
		
		$this->view->show("login/resultados.phtml",$data);
	}
	
	function listado(){
		$data=New actor();
		$actor['lista']=$data->listaActor();
		$this->view->show("actor/listado.phtml",$actor);
	}
	
	function editar(){
		$idActor=$_REQUEST['id'];
		$datos=New actor();
		$data['actor']=$datos->muestraActor($idActor);
		$this->view->show("actor/actualizar.phtml",$data);
	}
	

	
	function actualizausuario(){
			$data['apaterno']=$_REQUEST['apaterno'];
			$data['amaterno']=$_REQUEST['amaterno'];
			$data['nombres']=$_REQUEST['nombres'];
			$data['fechanac']=$_REQUEST['fechanac'];
			$data['email']=$_REQUEST['email'];
			$data['estado']=$_REQUEST['estado'];
			$idActor=$_REQUEST['idActor'];
			$accion=New actor();
			$exito=$accion->actualizaActor($data,"idActor=".$idActor."");
			
			if($exito){
				$resultado['mensaje']="Actualizo con éxito";
			}
			else{
				$resultado['mensaje']="Revisar el proceso";
			}
			
			$this->view->show("login/resultados.phtml",$resultado);
	}

	
	//**********INACTIVA*****
	
	function eliminar(){
		
		$idActor=$_REQUEST['id'];
		$accion=New Actor();
		$accion->inactivaActor($idActor);
		$data['ruta']="/actor/listado";
		$this->view->show("ruteador.phtml",$data);
		
	}
	
	function actoinac(){
		
		$idActor=$_REQUEST['id'];
		$accion=New Actor();
		$accion->acorinActor($idActor);
		$data['ruta']="/actor/listado";
		$this->view->show("ruteador.phtml",$data);
	}
	
}
?>