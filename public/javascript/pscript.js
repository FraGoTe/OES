function validaLogin()
{
  var usuario=$("#username").attr("value");
  var pwd=$("#password").attr("value");
  if(usuario != '' && pwd != ''){
	  
	  $.ajax({
		   async:true,
		   type: "POST",
		   dataType: "html",
		   contentType: "application/x-www-form-urlencoded",
		   url:'/Implementation/Login/ProcessLogin.php',
		   data:'username='+usuario+'&password='+pwd,
		   success:llegadaDatosuser,
		   timeout:4000
		 });		
  }
}

function llegadaDatosuser(datos)
{       
       if(datos=="alum" || datos=="admin")
       {
           window.location = '../Views/index.php';
       }
       
       else{
	$("#username").attr("value",'');	
	$("#password").attr("value",'');
        $('#myModal').modal('show');
       }
       
}

function changeSelect(valor) 
{ 
    $.ajax({
		   async:true,
		   type: "POST",
		   dataType: "html",
		   contentType: "application/x-www-form-urlencoded",
		   url:'/Implementation/Admin_estado_matricula/ObtenerAlumno.php',
		   data:'seleccionar='+valor,
                   beforeSend:antesdenvio,
		   success:llegadaDatosalum,
		   timeout:4000
		 });
}

function llegadaDatosalum(datos)
{       
	$("#grilla").html(datos);	
}

function antesdenvio()
{       
	$("#grilla").html('CARGANDO');	
}