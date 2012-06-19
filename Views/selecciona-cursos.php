<?php
include '../Implementation/Selecciona-Cursos/ObtenerCursos.php';
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
              <h3>¿Est&oacute; seguro de Matricularse?</h3>
            </div>
            <div class="modal-body">
              <h4>Atenci&oacute;n</h4>
              <p>Recuerde que esta matricula no tiene valor oficial.</p>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" class="btn" onclick="$('#myModal').modal('hide');" href="#">Cancelar</a>
                <a class="btn btn-primary" style="color: white;" onclick="continuar();" href="#">Continuar</a>
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
        data: data,
        success: function(datos){
               $("#conten").html(datos);
        }
    });  
}

</script>