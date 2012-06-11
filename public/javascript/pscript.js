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
		   url:'/Implementation/ProcessLogin.php',
		   data:'username='+usuario+'&password='+pwd,
		   success:llegadaDatosuser,
		   timeout:4000
		 });		
  }
}

function llegadaDatosuser(datos)
{       
       if(datos=='found')
       {
           window.location = '../Views/muestra-datos.php';
       }else{
	$("#username").attr("value",'');	
	$("#password").attr("value",'');
        $('#myModal').modal('show');
       }
       
}