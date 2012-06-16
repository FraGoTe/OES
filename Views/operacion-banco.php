<?php
include '../Layout/top.php';
include '../Layout/left.php';
?>    
<div id="demo-frame">
<script>
	$(document).ready(function (){
            $( "#datepicker" ).datepicker();
        }) ;
	</script>



<div class="demo">

<p>Fecha de Pago: <input type="text" id="datepicker" class="datepicker"></p>
</div>
</div><!-- End demo -->

<div class="control-group">
            <label for="input01" class="control-label">Nº de operación</label>  
            <input type="text" placeholder="voucher" class="span2">
          </div>

<div class="control-group">
            <label for="fileInput" class="control-label">Voucher Escaneado</label>
            <div class="controls">
              <input type="file" id="fileInput" class="input-file">
            </div>
          </div>
    <button class="btn btn-small btn-primary">Guardar</button>
<?php
include '../Layout/bottom.php';
?>