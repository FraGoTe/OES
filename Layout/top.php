<!DOCTYPE html>
<html>
    <head>
        <title>::Matricula FIEI::</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="Author" content="Francis Gonzales" />
        <link rel="stylesheet" href="../Public/css/modal.css" type="text/css" />
        <link type="text/css" href="../Public/css/jquery-ui-1.8.12.custom.css" rel="stylesheet" />  
        <link type="text/css" href="../Public/css/default.css" rel="stylesheet" />  
        <link type="text/css" href="../Public/css/ui.jqgrid.css" rel="stylesheet" /> 
        <link type="text/css" href="../Public/css/bootstrap.min.css" rel="stylesheet" />  
        <script type="text/javascript" src="../Public/javascript/jquery-1.7.2.min.js"></script>  
        <script type="text/javascript" src="../Public/javascript/jquery-ui-1.8.12.custom.min.js"></script>  
        <script type="text/javascript" src="../Public/javascript/jquery.ui.datepicker-es.js"></script>
        <script type="text/javascript" src="../Public/javascript/bootstrap.min.js"></script>     
        <script type="text/javascript" src="../Public/javascript/script.js"></script>      
        <script type="text/javascript" src="../Public/javascript/pscript.js"></script>      
        <script type="text/javascript" src="../Public/javascript/jqueryform.js"></script>    
        <script type="text/javascript" src="../Public/javascript/bootstrap-modal.js"></script>  
         <script type="text/javascript" src="../Public/javascript/i18n/grid.locale-es.js"></script>
         <script type="text/javascript" src="../Public/javascript/jquery.jqGrid.min.js"></script>    
    </head>
    <body> 
        <div id="wrapper">
            <div id="leyenda_div">
                <div id="unfv">
                    <a style="color:#FFF" target="_self" href="http://www.unfv.edu.pe/site/">Universidad Nacional Federico Villarreal</a>
                </div>
                <div id="fecha"> 

                </div>
            </div>
            <div id="top" style="height: 243px;">
                <div id="header-no" >
                    <object width="980" height="200" title="banner principal" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
                        <param value="../Public/images/bannerfier.swf" name="movie">
                        <param value="high" name="quality">
                        <param value="transparent" name="wmode">
                        <param value="transparent" name="wmode">
                        <embed width="980" height="200" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="../Public/images/bannerfier.swf">
                    </object>
                </div>
                 <?php
                session_start();
                if(@$_SESSION["active"])
                    ;
              //  echo "activa";
                else
                header('location: ../index.php');
                ?>
                <div id="horiznav" class="horiznav">
                    <ul style="float: left; width: 500px; margin-bottom: 4px;"><b>C&oacute;digo: <?php echo $_SESSION['usucod']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Usuario:  <?php echo $_SESSION['nombre']; ?> </b></ul>
                    <ul class="nav nav-pills" style="float:right;">
                         <li class="dropdown">
                             <a href="../Implementation/Login/CloseSession.php">Cerrar Sesi&oacute;n </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container"><br/><br/>