<?php

/**
 * El objetivo de esta funci�n es reemplazar las variables @path, @img_path
 * @css_path en los archivos css para que busquen bien las rutas.
 *
 * Los archivos CSS son cacheados mientras no cambie la fecha de modificacion
 * de estos, en este caso vuelven a ser cacheados.
 *
 * Este archivo solo tiene funci�n cuando se envia el segundo parametro
 * a stylesheet_link_tag("ruta.css", true)
 */
if(isset($_GET['c'])){
	$css = $_GET['c'];
	if(file_exists("css/$css.css")){
		$cache_css = base64_encode($css);
		if(file_exists("temp/$cache_css")){
			if(filemtime("temp/$cache_css")>filemtime("css/$css.css")){
				header('Content-type: text/css');
				print file_get_contents("temp/$cache_css");
				exit;
			}
		}
		$css_content = file_get_contents("css/$css.css");
		$css_content = str_replace("@path", $_GET['p'], $css_content);
		$css_content = str_replace("@img_path", $_GET['p']."img", $css_content);
		$css_content = str_replace("@css_path", $_GET['p']."css", $css_content);
		header('Content-type: text/css');
		file_put_contents("temp/$cache_css", $css_content);
		print $css_content;
                exit;
	}
}

?>