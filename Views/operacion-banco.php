<script>
    $(document).ready(function (){
        $( "#datepicker" ).datepicker();
    }) ;
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
            <input type="text" placeholder="voucher" />  
        </div>
    </div>

    <div class="control-group">
        <label for="fileInput" class="control-label">Voucher Escaneado : </label>
        <div class="controls">
            <input type="file" id="fileInput" class="input-file" />
        </div>
    </div>
      
    </div>
        </fieldset>
       <div style="width: 100%; text-align: center;">
              <button class="btn btn-small btn-primary" onclick="nexti();" >Siguiente</button>
        </div>

</div>

<script>
    function nexti(){
    $.ajax({
        url: 'selecciona-cursos.php',
        dataType: 'html',
        type: "POST",        
        success: function(datos){
               $("#conten").html(datos);
        }
    });  
}
</script>