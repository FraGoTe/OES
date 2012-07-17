<?php
include '../Layout/top.php';
include '../Layout/left.php';
?>
<div class="hero-unit">
    <h1>OES</h1>
    <p>Online Enrollment System</p>
    <p>
    </p>
    </div>
<script>
     $.ajax({
		   async:true,
		   type: "POST",
		   dataType: "html",
		   contentType: "application/x-www-form-urlencoded",
		   url:'/Implementation/Admin-estado-matricula/ValidaClaves.php',
		   success:function(datos){
                       if(datos=='NO')
                           change('cambiar-contrasena.php','cambiapass');
                   },
		   timeout:4000
            });	
</script>
<?php
include '../Layout/bottom.php';
?>