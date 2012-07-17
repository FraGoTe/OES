<?php
include '../Implementation/Muestra-Datos/ObtenerData.php';
@$aludata = $aludata[0];
?>
<style>
    
    #upload {
   position: relative;
   width: 80px;
   height: 20px;
   
   left:20px;
   overflow:hidden;
   background:url('../Public/images/uploadimg.png') left top no-repeat;
    }  

    #upload input {
   position: absolute;
   left: 20px;
   right: 0px;
   top: 0px;
   margin:0;
   padding:0;
   filter: Alpha(Opacity=0);
   -moz-opacity: 0;
   opacity: 0;
   }
</style>
<script>
    $(document).ready
    (
    function ()
    {
        $( "#datepicker" ).datepicker();
        
        $('#photoimg').live('change', function()
        {
            $("#preview").html('');
            $("#preview").html('<img src="../Public/images/loader.gif" width="130" height="150" alt="Uploading...."/>');
            $("#imageform").ajaxForm(
            {
                target: '#preview'
            }).submit();
        });
    }
    ) ;
</script>

<div class="form-horizontal" >
   
         <fieldset>
        <legend>Presentaci&oacute;n de Voucher</legend>
     <div style="margin-left: 110px;">
    <div class="control-group">

        <label class="control-label" for="datepicker"> Fecha de Pago : </label>
        <div class="controls">
            <input type="text" id="datepicker" class="datepicker" style="width: 100px;" />
            <img class="ui-datepicker-trigger" src='../Public/css/images/calendar.gif' style="height: 15px; margin-bottom: 10px;"/>
        </div>

    </div>


    <div class="control-group">
        <label for="input01" class="control-label">Nº de operación :</label>  
        <div class="controls">
            <input type="text" id="oper" placeholder="voucher" />  
        </div>
    </div>

    <div class="control-group">
        <label for="fileInput" class="control-label">Voucher Escaneado : </label>
        <div id="foto" >
             <div id='preview'>
                 <?php
                 //echo "../../Public/images/Fotos/{$_SESSION['usucod']}.jpg";
                if(file_exists("{$_SERVER['DOCUMENT_ROOT']}/Public/images/Boucher/{$_SESSION['alu_cod']}.jpg"))
                 echo "<img width='130' height='150' src='../../Public/images/Boucher/{$_SESSION['alu_cod']}.jpg' class='preview'>";
                 ?>
            </div>
            <form id="imageform" method="post" enctype="multipart/form-data" action='../Implementation/Muestra-Datos/UploadImage.php'>
                <div id="upload" style="border: 0px;" class="btn btn-primary">
                <input type="file"  class="btn btn-primary" name="photoimg" id="photoimg" />
                </div>
            </form>       
        </div>
    </div>
      
    </div>
        </fieldset>
       <div style="width: 100%; text-align: center;">
              <button class="btn btn-small btn-primary" onclick="nexti();" >Siguiente</button>
        </div>

</div>

<div class="modal hide fade" id="invalido">
            <div class="modal-header">
              <h3>Datos inv&aacute;lidos</h3>
            </div>
            <div class="modal-body">
              <h4>Atenci&oacute;n</h4>
              <p>Debe ingresar todos los datos para continuar.</p>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" class="btn btn-primary" style="color:white" onclick="$('#invalido').modal('hide');" href="#">Aceptar</a>
                
            </div>
</div>
<script>
    function nexti()
    {
    
        
        if(($("#datepicker").val()!="") && ($("#oper").val()!="")&& ($("#photoimg").val()!=""))
        { 
            $.ajax({
                url: 'selecciona-cursos.php',
                async: false,
                dataType: 'html',
                type: "POST",        
                success: function(datos){
                       $("#conten").html(datos);
                }
            });
        }
        else
        $('#invalido').modal('show');
    }
</script>