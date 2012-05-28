<?php
class View
{
	function __construct()
	{
	}
 
	public function show($name, $vars = array())
	{
		//$name es el nombre de nuestra plantilla, por ej, listado.php
		//$vars es el contenedor de nuestras variables, es un arreglo del tipo llave => valor, opcional.
 
		//Traemos una instancia de nuestra clase de configuracion.
		$config = Config::singleton();
 
		//Armamos la ruta a la plantilla
		$path = $config->get('viewsFolder') . $name;
 
		//Si no existe el fichero en cuestion, tiramos un 404
		if (file_exists($path) == false)
		{
			trigger_error ('Template `' . $path . '` does not exist.', E_USER_NOTICE);
			return false;
		}
 
		//Si hay variables para asignar, las pasamos una a una.
		if(is_array($vars))
		{
                    foreach ($vars as $key => $value)
                    {
                	$$key = $value;
                    }
                }
 
		//Finalmente, incluimos la plantilla.
		include($path);
	
	}
}
?>