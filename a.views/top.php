<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
<title>M&oacute;dulo de Matr&iacute;cula UNFV - FIEI</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <link href="/facultades/fiei/templates/youmagazine/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="../../css/modal.css" type="text/css" />
  <link rel="stylesheet" href="http://www.unfv.edu.pe/facultades/fiei/modules/mod_djimageslider/assets/style.css" type="text/css" />
   <link type="text/css" href="../../css/jquery-ui-1.8.12.custom.css" rel="stylesheet" >  
   <link type="text/css" href="../../css/default.css" rel="stylesheet" >  
   <link type="text/css" href="../../css/ui.jqgrid.css" rel="stylesheet" >  
   <link type="text/css" href="../../css/style.css" rel="stylesheet" >  
    <script type="text/javascript" src="../../javascript/jquery-1.7.2.min.js"></script>  
    <script type="text/javascript" src="../../javascript/jscrpt.js"></script>  
    <script type="text/javascript" src="../../javascript/jquery-ui-1.8.12.custom.min.js"></script>  
    <script type="text/javascript" src="../../javascript/jquery.ui.datepicker-es.js"></script>
     <script type="text/javascript" src="../../javascript/i18n/grid.locale-es.js"></script>
    <script type="text/javascript" src="../../javascript/jquery.jqGrid.min.js"></script>
  <style type="text/css">

		/* Styles for DJ Image Slider with module id 100 */
		#djslider-loader100 {
			margin: 0 auto;
			position: relative;
			height: 355px; 
			width: 200px;
		}
		#djslider100 {
			margin: 0 auto;
			position: relative;
			height: 355px; 
			width: 200px;
			display: none;
		}
		#slider-container100 {
			position: absolute;
			overflow:hidden;
			left: 0; 
			top: 0;
			height: 355px; 
			width: 200px;			
		}
		#djslider100 ul#slider100 {
			margin: 0 !important;
			padding: 0 !important;
			border: 0 !important;
		}
		#djslider100 ul#slider100 li {
			list-style: none outside !important;
			float: left;
			margin: 0 !important;
			border: 0 !important;
			padding: 0 0px 10px 0 !important;
			position: relative;
			height: 63px;
			width: 200px;
			background: none;
			overflow: hidden;
		}
		#slider100 li img {
			width: auto;
			height: 63px;
			border: 0 !important;
			margin: 0 !important;
		}
		#slider100 li a img, #slider100 li a:hover img {
			border: 0 !important;
		}
		
		/* Slide description area */
		#slider100 .slide-desc {
			position: absolute;
			bottom: 10px;
			left: 0px;
			width: 200px;
		}
		#slider100 .slide-desc-in {
			position: relative;
		}
		#slider100 .slide-desc-bg {
			position:absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		#slider100 .slide-desc-text {
			position: relative;
		}
		#slider100 .slide-desc-text h3 {
			display: block !important;
		}
		
		/* Navigation buttons */
		#navigation100 {
			position: relative;
			top: 30px; 
			margin: 0 5px;
			text-align: center !important;
		}
		#prev100 {
			cursor: pointer;
			display: block;
			position: absolute;
			left: 0;
			
		}
		#next100 {
			cursor: pointer;
			display: block;
			position: absolute;
			right: 0;
			
		}
		#play100, 
		#pause100 {
			cursor: pointer;
			display: block;
			position: absolute;
			left: 47%;
			top: -99999px;
		}
		#cust-navigation100 {
			position: absolute;
			top: 10px;
			right: 10px;
			z-index: 15;
			display: none;
		}
		
  </style>
  <script src="../../javascript/core.js" type="text/javascript"></script>
  <script src="../../javascript/mootools-core.js" type="text/javascript"></script>
  <script src="../../javascript/caption.js" type="text/javascript"></script>
  <script src="../../javascript/mootools-more.js" type="text/javascript"></script>
  <script src="../../javascript/modal.js" type="text/javascript"></script>
  <script src="../../javascript/slider.js" type="text/javascript"></script>
  <script type="text/javascript">

		window.addEvent('domready', function() {

			SqueezeBox.initialize({ handler: 'ajax'});
			SqueezeBox.assign($$('a.modal'), {
				parse: 'rel'
			});
		});
(function($){ window.addEvent('domready',function(){var Slider100 = new DJImageSlider({id: '100', slider_type: 1, slide_size: 73, visible_slides: 5, show_buttons: 0, show_arrows: 1, preload: 800},{auto: 0, transition: Fx.Transitions.linear, duration: 600, delay: 3600})}); })(document.id);
  </script>
  <script type="text/javascript">
				var homepath = "/facultades/fiei";
			</script>
<script type="text/javascript" src="/facultades/fiei/plugins/content/thickbox/includes/smoothbox.js"></script>
<link rel="stylesheet" href="../../css/smoothbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/facultades/fiei/plugins/content/thickbox/includes/slimbox.js"></script>
<link rel="stylesheet" href="../../css/slimbox.css" type="text/css" media="screen" />
<style type="text/css">
		.lbLoading {
		background: #fff url(/facultades/fiei/plugins/content/thickbox/images/loading.gif) no-repeat center;
		}
		#lbPrevLink:hover {
		background: transparent url(/facultades/fiei/plugins/content/thickbox/images/prevlabel.gif) no-repeat 0% 15%;
		}
		#lbNextLink:hover {
		background: transparent url(/facultades/fiei/plugins/content/thickbox/images/nextlabel.gif) no-repeat 100% 15%;
		}
		#lbCloseLink {
		display: block;
		float: right;
		width: 66px;
		height: 22px;
		background: transparent url(/facultades/fiei/plugins/content/thickbox/images/closelabel.gif) no-repeat center;
		margin: 5px 0;
		}
	</style>

		<link href="http://www.unfv.edu.pe/facultades/fiei/templates/youmagazine/css/template.css" rel="stylesheet" type="text/css" />
		<link href="http://www.unfv.edu.pe/facultades/fiei/templates/youmagazine/css/brick.css" rel="stylesheet" type="text/css" />


									<script type="text/javascript"> var YJSG_topmenu_font = '12px'; </script>
			<script type="text/javascript" src="http://www.unfv.edu.pe/facultades/fiei/templates/youmagazine/src/mouseover13.js"></script>
			<script language="javascript" type="text/javascript">	
			window.addEvent('domready', function(){
				new SmoothDrop({
					'container':'horiznav',	
					contpoz: 0,
					horizLeftOffset: 35, // submenus, left offset
					horizRightOffset: -35, // submenus opening into the opposite direction
					horizTopOffset: 20, // submenus, top offset
					verticalTopOffset:32, // main menus top offset
					verticalLeftOffset: 10, // main menus, left offset
					maxOutside: 50
				});
			});				
			</script>	
					<style type="text/css">
			.horiznav li li,.horiznav ul ul a, .horiznav li ul,.YJSG_listContainer{
			width:245px;
		}
			</style>
				   			<style type="text/css">
   			  div.title h1,div.title h2,div.componentheading, h1,h2,h3,h4,h5,h6,.yjround h4, .yjsquare h4{
       			 font-family:Tahoma, Geneva, sans-serif;}
  			</style>
	<style type="text/css">
.horiznav li ul ul,.subul_main.group_holder ul.subul_main ul.subul_main, .subul_main.group_holder ul.subul_main ul.subul_main ul.subul_main, .subul_main.group_holder ul.subul_main ul.subul_main ul.subul_main ul.subul_main,.horiznav li li li:hover ul.dropline{
	margin-top: -32px!important;
	margin-left:90px%!important;
}
</style>
</head>
<body id="stylef6">
<div id="mod_contenedor" style="width:980px">
<div id="leyenda_div" style="height: 22px; border-bottom: 1px solid #FFF;">
    	<div style="float:left; text-align:center; color:#969696; padding-top:3px">
			<div style="width:200px; font-family:Tahoma; font-size:8.5pt; margin-left: 10px; color:#FFF"><a href="http://www.unfv.edu.pe/site/" target="_self" style="color:#FFF">Universidad Nacional Federico Villarreal</a></div>         
		</div>                   
		<div style="float:right; width:390px;font-family:Tahoma; font-size:8.5pt;text-align:center; padding:2px 10px;  font-weight:500; color: #FFF;text-align:right">
        Martes, 8 de Mayo del 2012          
          </div>          
	</div>
<div id="centertop" style="font-size:12px; width:980px;">
		  				
  		 <!--header-->
  <div id="header-no" style="height:200px;background-color: #FBFBFB">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="980" height="200" title="banner principal">
    <param name="movie" value="/facultades/fiei/developed/flashbanner/bannerfier.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="transparent">
    <param name="wmode" value="transparent">
    <embed src="/facultades/fiei/developed/flashbanner/bannerfier.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="980" height="200" wmode="transparent"></embed>
  </object>    
    <!-- end logo -->
   <!-- -->  </div>
  <!-- end header -->
  
		    <!--top menu-->
<div id="topmenu_holder">
    <div class="top_menu" style="font-size:12px;">
        <div id="horiznav" class="horiznav">	<ul class="menunav">
	<li id="current" class="active item101"><span class="mymarg"><a href="/facultades/fiei/"><span class="yjm_has_none"><span class="yjm_title">Inicio</span></span></a></span></li><li class="haschild item124"><span class="child"><a href="#"><span class="yjm_has_none"><span class="yjm_title">Facultad</span></span></a></span><ul class="subul_main level1" style="border:2px solid #E0E0E0 "><li class="item158"><span class="mymarg"><a href="/facultades/fiei/facultad/carreras-profesionales"><span class="yjm_has_none"><span class="yjm_title">Carreras Profesionales</span></span></a></span></li><li class="item162"><span class="mymarg"><a href="/facultades/fiei/facultad/mision-y-vision"><span class="yjm_has_none"><span class="yjm_title">Mision y Visión</span></span></a></span></li><li class="item163"><span class="mymarg"><a href="/facultades/fiei/facultad/organigrama"><span class="yjm_has_none"><span class="yjm_title">Organigrama</span></span></a></span></li><li class="item207"><span class="mymarg"><a href="/facultades/fiei/facultad/resena-historica"><span class="yjm_has_none"><span class="yjm_title">Reseña Histórica</span></span></a></span></li><li class="right"></li><li class="br"></li></ul></li><li class="item119"><span class="mymarg"><a href="/facultades/fiei/autoridades"><span class="yjm_has_none"><span class="yjm_title">Autoridades</span></span></a></span></li><li class="haschild item410"><span class="child"><a href="#"><span class="yjm_has_none"><span class="yjm_title">Oficinas</span></span></a></span><ul class="subul_main level1" style="border:2px solid #E0E0E0 "><li class="item411"><span class="mymarg"><a href="/facultades/fiei/oficinas/departamento-academico"><span class="yjm_has_none"><span class="yjm_title">Departamento Académico</span></span></a></span></li><li class="haschild item412"><span class="child"><a href="#"><span class="yjm_has_none"><span class="yjm_title">Escuelas Profesionales</span></span></a></span><ul class="subul_main level2" style="border:2px solid #E0E0E0 "><li class="item413"><span class="mymarg"><a href="/facultades/fiei/oficinas/escuelas/electronica"><span class="yjm_has_none"><span class="yjm_title">Electrónica</span></span></a></span></li><li class="item414"><span class="mymarg"><a href="/facultades/fiei/oficinas/escuelas/informatica"><span class="yjm_has_none"><span class="yjm_title">Informática</span></span></a></span></li><li class="item415"><span class="mymarg"><a href="/facultades/fiei/oficinas/escuelas/mecatronica"><span class="yjm_has_none"><span class="yjm_title">Mecatrónica</span></span></a></span></li><li class="item416"><span class="mymarg"><a href="/facultades/fiei/oficinas/escuelas/telecomunicaciones"><span class="yjm_has_none"><span class="yjm_title">Telecomunicaciones</span></span></a></span></li><li class="right"></li><li class="br"></li></ul></li><li class="item417"><span class="mymarg"><a href="/facultades/fiei/oficinas/grados-y-titulos"><span class="yjm_has_none"><span class="yjm_title">Grados y Titulos</span></span></a></span></li><li class="item418"><span class="mymarg"><a href="/facultades/fiei/oficinas/servicios-academicos"><span class="yjm_has_none"><span class="yjm_title">Oficina de Serv. Academicos</span></span></a></span></li><li class="item419"><span class="mymarg"><a href="/facultades/fiei/oficinas/practicas-pre-profesionales"><span class="yjm_has_none"><span class="yjm_title">Prácticas Pre-Profesionales</span></span></a></span></li><li class="right"></li><li class="br"></li></ul></li><li class="item446"><span class="mymarg"><a href="/facultades/fiei/postgrado"><span class="yjm_has_none"><span class="yjm_title">Sección de Postgrado</span></span></a></span></li></ul></div>
    </div>
</div>
    <!-- end top menu -->
  		
  		  		        </div>
<!-- end centartop-->
<div id="centerbottom" style="font-size:12px; width:980px;">
       <!--MAIN LAYOUT HOLDER -->
<div id="holder2">
  
<!--

-->
