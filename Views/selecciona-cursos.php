<?php
include "{$_SERVER['DOCUMENT_ROOT']}/Implementation/Selecciona-Cursos/ObtenerCursos.php";
?>    
<fieldset>
        <legend>Cursos a Matricular</legend>
<div id="fgt">
         <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Periodo</th>
                    <th>C&oacute;digo</th>
                    <th>Turno</th>
                    <th>Secci&oacute;n</th>
                    <th>Asignatura</th>
                    <th>Creditos</th>
                    <th>Vez</th>
                    <th>Mat</th>
                  </tr>
                </thead>
                <tbody>
                 <?php echo @$cursos; ?>
                </tbody>
           </table>
          <div style="width: 100%; text-align: center;">
              <button class="btn btn-small btn-primary" onclick="next();" >Siguiente</button>
          </div>
</div>
</fieldset>
<div class="modal hide fade" id="myModal">
            <div class="modal-header">
              <h3>ATENCI&Oacute;N</h3>
            </div>
            <div class="modal-body">
                <h4>T&eacuterminos y condiciones de la Matr&iacutecula</h4><p></p>
              <p>- El alumno se hace responsable de toda afirmación realizada o acto ocurrido mediante el uso de su nombre de usuario y contraseña.</p>
              <p>- EL alumno es el único responsable por los cursos elegidos y por toda informacion brindada para el proceo de matricula online.</p>
              <p>- La FIEI se reserva el derecho de eliminar o modificar cualquier información, comunicación, material de descarga o mensaje que en su opinión viole políticas de uso.</p>
              <p>- La FIEI se hace responsable por la privacidad de la información veraz entregada por el Usuario, no revelará, ni compartirá esta información sin el consentimiento del usuario, excepto cuando lo requiera la ley o a solicitud del gobierno</p>
              <p>- Al aceptar los terminos y condiciones, asegura que está de acuerdo con todo lo estipulado anteriormente.</p>


            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" class="btn" onclick="$('#myModal').modal('hide');" href="#">Cancelar</a>
                <a class="btn btn-primary" style="color: white;" onclick="continuar();" href="#">He le&iacutedo, y acepto los t&eacuterminos</a>
            </div>
</div>
<script>

function next(){
      $('#myModal').modal('show');
}
function continuar(){
    $('#myModal').modal('hide');
   var data="";
    $('input[type=checkbox]').each(function(){
        data+=$(this).val();
    });
    
    $.ajax({
        url: 'imprimir-boleta.php',
        dataType: 'html',
        type: "POST",
        data: "data="+data,
        success: function(datos){
               $("#conten").html(datos);
        }
    });  
}

</script>