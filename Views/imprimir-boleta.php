<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Implementation/Insertar-Cursos/InsertarCursos.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Implementation/Selecciona-Cursos/ObtenerPrematricula.php";
?>
<style>
    .controls{
        margin-left: 100px !important;
    }
    .control-label{
        width: 90px !important;
    }
    .input-xlarge{
        width: 350px !important;
    }
    .cld{
        width: 100px !important;
    }
    .wct{
        width: 115px !important;
        float: left; 
        margin-left: 10px;
    }
    .wcts{
        width: 115px !important;
        float: left;
        margin-left: 10px;
    }
    .fila{
        clear: both;
        margin: 0;
        padding: 0;
    }
    #upload {
   position: relative;
   width: 80px;
   height: 24px;
   overflow:hidden;
   background:url('../Public/images/uploadimg.png') left top no-repeat;
    }  

    #upload input {
   position: absolute;
   left: auto;
   right: 0px;
   top: 0px;
   margin:0;
   padding:0;
   filter: Alpha(Opacity=0);
   -moz-opacity: 0;
   opacity: 0;
}
</style>
<div class="form-horizontal">
    <fieldset>
        <legend>Boleta de Matricula</legend>
        <div style="float: left; width: 490px;">
        <div class="control-group">
            <label class="control-label" for="input01">Alumno :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="<?php echo $prematri[0][0]['alu_nom_completo']; ?>" class="input-xlarge" name="alu_nom_completo" id="alu_nom_completo" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">C&oacute;digo :</label>
            <input type="text" disabled="disabled" value="<?php echo $prematri[0][0]['alu_cod']; ?>" class="input-small wcts" name="alu_cod" id="alu_cod" />
            <label class="control-label cld" for="input01">DNI :</label>
            <input type="text" disabled="disabled" value="<?php echo $prematri[0][0]['alu_dni']; ?>" class="input-small wcts" name="alu_dni" id="alu_dni" />
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Escuela :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="<?php 
                            switch($prematri[0][0]['alu_esc']):
                            case 'IF':
                                echo 'Ingenier&iacute;a Inform&aacute;tica';
                                break;
                            case 'IL':
                               echo 'Ingenier&iacute;a Electronica';
                                break;
                            case 'IE':
                                echo 'Ingenier&iacute;a Electronica';
                                break;
                            case 'IT':
                                echo 'Ingenier&iacute;a de Telecomunicaciones';
                                break;
                            case 'IM':
                                echo 'Ingenier&iacute;a Mecatronica';
                                break;
                            endswitch; ?>" class="input-xlarge" name="alu_esc" id="alu_esc" />
            </div>
        </div>
             </div>
          <div id="foto" style="float: left; width: 150px;">
             <div id='preview'>
                 <?php
                if(file_exists("{$_SERVER['DOCUMENT_ROOT']}/Public/images/Fotos/{$_SESSION['alu_cod']}.jpg"))
                 echo "<img width='110' height='130' src='../../Public/images/Fotos/{$_SESSION['alu_cod']}.jpg' class='preview'>";
                 ?>
            </div>
        </div>
    </fieldset>
    
 <table id="list10_d"></table>
</div>
<div style="width: 100%; text-align: center;">
    <form target="reporte" action="/Controllers/BoletaMatriculaController.php"> 
        <input type="hidden" id="alu_cod" name="alu_cod" value="<?php echo $prematri[0][0]['alu_cod']; ?>" />
    <button align="right" id="impBoleta" class="btn btn-small btn-primary" >Imprimir Boleta</button>
    <form/>
</div>
<script> 
    jQuery("#list10_d").jqGrid({ 
    height: 300,
    width: 650,
    url:'/Implementation/Admin-estado-matricula/ObtenerCursoAlum.php?codigoalum=<?php echo $_SESSION['alu_cod']; ?>', 
    datatype: "json", 
    colNames:['Periodo','C&oacute;digo', 'Turno', 'Secci&oacute;n','Asignatura','Creditos'], 
    colModel:[ {name:'cua_per',index:'cua_per', width:55, align:"center"}, 
               {name:'cur_cod',index:'cur_cod', width:55, align:"center"}, 
               {name:'cua_turn',index:'cua_turn', width:40, align:"center"}, 
               {name:'cua_sec',index:'cua_sec', width:45, align:"center"}, 
               {name:'cur_nom',index:'cur_nom', width:300, align:"left"}, 
               {name:'cur_cred',index:'cur_cred', width:50, align:"center"}
               //,{name:'cua_vez',index:'cua_vez', width:40,align:"center", sortable:false, search:false}
           ], 
    rowNum:50, 
    //rowList:[5,10,20], 
    pager: '#pager10_d', 
    sortname: 'cur_cod', 
    viewrecords: true, 
    sortorder: "asc", 
   // multiselect: true, 
    caption:"Alumno" }).navGrid('#pager10_d',{add:false,edit:false,del:false}); 

$("#list10_d").jqGrid('setGridParam',
    {url:'/Implementation/Admin-estado-matricula/ObtenerCursoAlum.php?codigoalum=2008013145',page:1}); 
        $("#list10_d").jqGrid('setCaption',"Cursos Matriculados").trigger('reloadGrid');
           var s; s = jQuery("#list10_d").jqGrid('getGridParam','selarrrow');
</script>
