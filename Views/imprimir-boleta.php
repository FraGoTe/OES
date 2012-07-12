<?php
include '../Implementation/Selecciona-Cursos/ObtenerPrematricula.php';
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
    
 <table id="list4"></table>
</div>
<script>
    $("#list4").jqGrid({ 
        datatype: "local", 
        height: 280, 
        colNames:['Periodo','C&oacute;digo', 'Turno', 'Secci&oacute;n','Asignatura','Creditos','Vez'], 
        colModel:[ 
            {name:'per',index:'per', width:45}, 
            {name:'cod',index:'cod', width:45, align:"center"}, 
            {name:'tur',index:'tur', width:42, align:"center"}, 
            {name:'sec',index:'sec', width:42, align:"center"}, 
            {name:'asig',index:'asig', width:390, align:"left"}, 
            {name:'cre',index:'cre', width:48,align:"center",sorttype:"int"}, 
            {name:'vez',index:'vez', width:43, align:"center"} ], 
        caption: "Cursos Matriculados" }); 
    
    var mydata = [ 
        <?php echo $prematri[1]; ?>
             ]; 
    
        for(var i=0;i<=mydata.length;i++) $("#list4").jqGrid('addRowData',i+1,mydata[i]);
</script>
