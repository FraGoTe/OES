<div class="form-horizontal">
    <fieldset>
        <legend>Datos del Alumno</legend>
<form name="form1" id="form1" onsubmit="return validacion()">
  <p>Contrase&ntilde;a Actual</p><input  type="password" id="passactual" name="passactual" value="" />  <p></p>
  <p>Nueva Contrase&ntilde;a</p><input  type="password" id="passnew1" name="passnew1" value="" />  <p></p>
  <p>(Confirmar nueva Contrase&ntilde;a)</p><input  type="password" id="passnew2" name="passnew2" value="" />  <p></p>
  <input name="submit" type="submit" class="btn btn-small btn-primary" value="Cambiar Password" />
</form>
    </fieldset>
</div>
<script>
    function validacion()
    {
        var id=true;
     $.ajax({
		   async:false,
		   type: "POST",
		   dataType: "html",
		   contentType: "application/x-www-form-urlencoded",
		   url:'/Controllers/CambiarContrasenaController.php',
                   data: $("#form1").serialize(),
		   success:function(datos){
                       
                       if(datos!='OK')
                       {
                           var mensaje;
                           id=false;
                           if(datos=='NOCON')
                               mensaje="Las contrase&ntilde;as no coinciden";
                           else
                               mensaje="Contrase&ntilde;as Incorrectas";
                           $('#mensj').html(mensaje);
                           $('#invalido').modal('show');
                           
                       }
                   },
		   timeout:4000
            });	
            return id;
     
    }
</script>
<div class="modal hide fade" id="invalido">
            <div class="modal-header">
              <h3>Datos inv&aacute;lidos</h3>
            </div>
            <div class="modal-body">
              <h4>Atenci&oacute;n</h4>
              <p id="mensj"></p>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" class="btn btn-primary" style="color:white" onclick="$('#invalido').modal('hide');" href="#">Aceptar</a>
                
            </div>
</div>
