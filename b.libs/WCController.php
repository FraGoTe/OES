<?php
class WCController
{
	static function main()
	{
		//Incluimos algunas clases:
 
		require 'b.libs/Config.php'; //de configuracion
		require 'b.libs/View.php'; //Mini motor de plantillas
 
		require 'config.php'; //Archivo con configuraciones.

		//Se trae al controlador general y al modelo base
                $controllerGeneral=$config->get('controllersFolder') . $config->get('controllerGeneral') . '.php';
                $modelBase=$config->get('modelsFolder') . $config->get('modelBase') . '.php';
                require $controllerGeneral;
                require $modelBase;
 				
		//Con el objetivo de no repetir nombre de clases, nuestros controladores
		//terminaran todos en Controller. Por ej, la clase controladora Items, ser� ItemsController
 
		//Formamos el nombre del Controlador o en su defecto, tomamos que es el IndexController
		if(!empty($_GET['controlador'])){
		      	$controllerName = $_GET['controlador'] . 'Controller';
		      	$modelname=$_GET['controlador'].'models';
		      if(! empty($_GET['accion'])){
		      	$actionName = $_GET['accion'];
		      		//Si no existe la clase que buscamos y su acci�n, tiramos un error 404
				}
				else{
					$actionName = "index";
				}
		}
		else{
		      $controllerName = "indexController";
		      $actionName = "index";
		     
		}

		
				 $controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
						//Incluimos el fichero que contiene nuestra clase controladora solicitada.
					if(is_file($controllerPath)){
					     require $controllerPath;
					}
					else{
						$datos['mensaje']="Error::El Controlador no existe";
						$vistaDefault=New View();
						$vistaDefault->show('error.php', $datos);
						return false;
					}
				
				$modelPath=$config->get('modelsFolder') . $modelname . '.php';
					if(is_file($modelPath)){
						require $modelPath;
					}
					
					if (is_callable(array($controllerName, $actionName)) == false){
						$datos['mensaje']="Error:: Accion en blanco o inexistente";
						$vistaDefault=New View();
						$vistaDefault->show('index.php', $datos);
						return false;
					}else{
					//Si todo esta bien, creamos una instancia del controlador y llamamos a la accion
					$controller = new $controllerName();
					$controller->$actionName();						
					}
	}
}
?>