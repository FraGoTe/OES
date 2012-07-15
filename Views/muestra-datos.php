<?php
include '../Implementation/Muestra-Datos/ObtenerData.php';
@$aludata = $aludata[0];
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
        <legend>Datos del Alumno</legend>
        <div style="float: left; width: 490px;">
        <div class="control-group">
            <label class="control-label" for="input01">Alumno :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="<?php echo $aludata['alu_nom_completo']; ?>" class="input-xlarge" name="alu_nom_completo" id="alu_nom_completo" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">C&oacute;digo :</label>
            <input type="text" disabled="disabled" value="<?php echo $aludata['alu_cod']; ?>" class="input-small wcts" name="alu_cod" id="alu_cod" />
            <label class="control-label cld" for="input01">DNI :</label>
            <input type="text" disabled="disabled" value="<?php echo $aludata['alu_dni']; ?>" class="input-small wcts" name="alu_dni" id="alu_dni" />
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Sexo :</label>
            <input type="text" disabled="disabled" value="<?php echo $aludata['alu_sexo']; ?>" class="input-small wcts" name="alu_sexo" id="alu_sexo" />
            <label class="control-label cld" for="input01">A&ntilde;o de Ing. :</label>
            <input type="text" disabled="disabled" value="<?php echo $aludata['alu_anio_ingreso']; ?>" class="input-small wcts" name="alu_anio_ingreso" id="alu_anio_ingreso" />
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Modalidad :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="<?php echo $aludata['alu_mod_ingreso']; ?>" class="input-xlarge" name="alu_mod_ingreso" id="alu_mod_ingreso" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Escuela :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="<?php 
                            switch($aludata['alu_esc']):
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
                 //echo "../../Public/images/Fotos/{$_SESSION['usucod']}.jpg";
                if(file_exists("{$_SERVER['DOCUMENT_ROOT']}/Public/images/Fotos/{$_SESSION['alu_cod']}.jpg"))
                 echo "<img width='130' height='150' src='../../Public/images/Fotos/{$_SESSION['alu_cod']}.jpg' class='preview'>";
                 ?>
            </div>
            <form id="imageform" method="post" enctype="multipart/form-data" action='../Implementation/Muestra-Datos/UploadImage.php'>
                <div id="upload" style="border: 0px;" class="btn btn-primary">
                <input type="file"  class="btn btn-primary" name="photoimg" id="photoimg" />
                </div>
            </form>       
        </div>
           
    </fieldset>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#photoimg').live('change', function()
        {
            $("#preview").html('');
            $("#preview").html('<img src="../Public/images/loader.gif" width="130" height="150" alt="Uploading...."/>');
            $("#imageform").ajaxForm(
            {
                target: '#preview'
            }).submit();
        });
    });
   
</script>