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
        <script type="text/javascript" src="../Public/javascript/pscript.js"></script>      
        <script type="text/javascript" src="../Public/javascript/bootstrap-modal.js"></script>  
       <!--   <script type="text/javascript" src="../Public/javascript/i18n/grid.locale-es.js"></script>
         <script type="text/javascript" src="../Public/javascript/jquery.jqGrid.min.js"></script>    
        -->
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
                <div id="horiznav" class="horiznav">
                    <ul class="nav nav-pills" style="float:right;">
                        <li class="dropdown">
                            <a href="#" >Home<b class="caret"></b></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Login <b class="caret"></b></a>
                            <ul class="dropdown-menu" id="menu3">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container"><br/><br/>
                <form  class="form-horizontal" onsubmit="return false;" style="width: 500px; margin-right: auto; margin-left: auto;">
                    <fieldset>
                        <legend>Login</legend>
                        <div style="text-align: center;">
                            <div class="control-group" style="width: 300px;">
                                <label class="control-label" for="username">Usuario :</label>
                                <div class="controls">
                                    <input id="username" class="input-medium" type="text" maxlength="15"/>
                                </div>
                            </div>
                            <div class="control-group"  style="width: 300px;">
                                <label class="control-label" for="password">Contrase&ntilde;a :</label>
                                <div class="controls">
                                    <input id="password" class="input-medium" type="password" maxlength="15"/>
                                </div>
                            </div>
                            <div class="form-actions"  style="width: 300px;">
                                <button onclick="validaLogin();" class="btn btn-primary" type="submit">Enviar</button>
                                <button class="btn" type="reset">Cancelar</button>
                            </div>
                        </div>
                    </fieldset>
                </form> 
                <div class="modal hide fade in" id="myModal" style=" width:270px; position:absolute; left:50%; top:50%; margin:-75px 0 0 -135px;" >
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal">×</a>
                        <h3>Alerta</h3>
                    </div>
                    <div class="modal-body">
                        <p>Usuario y clave no encontrados</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
            <br/><br/><br/><br/>
            <div id="footer" >
                <div id="foot">
                    <div class="ro">
                        <div class="ce ce1 cel w12">
                            <div class="co1b1 co coa2 coc1 m3 footer2">
                                <div class="br br1">
                                    <div class="msnfoot1 cf">
                                        <div class="left_primary">
                                            <span class="primary">
                                                <a href="http://www.unfv.edu.pe">UNFV</a>
                                                ,
                                                <a href="http://www.unfv.edu.pe/facultades/fiei/">Facultad de Ingeniería Electrónica e Informática</a>
                                            </span>
                                            <br>
                                            <span>Jr. Iquique Nº 127 - Breña-Lima.</span>
                                            <br>
                                            <span>Telefóno: 720 9720 Anexo 9871, 9866</span>
                                        </div>
                                        <a class="copyright" href="http://www.unfv.edu.pe">
                                            <span>&copy; 2012 UNFV</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>