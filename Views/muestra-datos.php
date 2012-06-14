<?php

include '../Layout/top.php';
include '../Layout/left.php';
?>
<style>
    .controls{
        margin-left: 125px !important;
    }
    .control-label{
        width: 115px !important;
    }
    .input-xlarge{
        width: 350px !important;
    }
    .cld{
        width: 100px !important;
    }
    .wct{
        width: 115px !important;
        float: left; margin-left: 10px;
    }
    .wcts{
        width: 115px !important;
        float: left; margin-left: 10px;
    }
    .fila{
        clear: both;
        margin: 0;
        padding: 0;
    }
</style>
<div class="form-horizontal">
    <fieldset>
        <legend>Datos del Alumno</legend>
        <div class="control-group">
            <label class="control-label" for="input01">Alumno :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="francis" class="input-xlarge" name="alu_nom_completo" id="alu_nom_completo" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">C&oacute;digo :</label>
            <input type="text" disabled="disabled" value="francis" class="input-small wcts" name="alu_cod" id="alu_cod" />
            <label class="control-label cld" for="input01">DNI :</label>
            <input type="text" disabled="disabled" value="francis" class="input-small wcts" name="alu_dni" id="alu_dni" />
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Sexo :</label>
            <input type="text" disabled="disabled" value="francis" class="input-small wcts" name="alu_sexo" id="alu_sexo" />
            <label class="control-label cld" for="input01">A&ntilde;o de Ing. :</label>
            <input type="text" disabled="disabled" value="francis" class="input-small wcts" name="alu_anio_ingreso" id="alu_anio_ingreso" />
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Modalidad :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="francis" class="input-xlarge" name="alu_mod_ingreso" id="alu_mod_ingreso" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Escuela :</label>
            <div class="controls">
                <input type="text" disabled="disabled" value="francis" class="input-xlarge" name="alu_esc" id="alu_esc" />
            </div>
        </div>
        <div id="foto" style="float: left;">
            <form id="imageform" method="post" enctype="multipart/form-data" action='../Implementation/Muestra-Datos/UploadImage.php'>
                Upload image <input type="file" style="" name="photoimg" id="photoimg" />
            </form>       
            <div id='preview'>
            </div>
        </div>
    </fieldset>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#photoimg').live('change', function()
        {
            $("#preview").html('');
            $("#preview").html('<img src="../Public/images/loader.gif" alt="Uploading...."/>');
            $("#imageform").ajaxForm(
            {
                target: '#preview'
            }).submit();
        });
    });
</script>
<?php

include '../Layout/bottom.php';
?>