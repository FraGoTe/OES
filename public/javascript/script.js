/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function fechaLargaHoy(){
    var fechaActual = new Date();
    var diasemana = fechaActual.getDay();
    var dia = fechaActual.getDate();
    var mes = fechaActual.getMonth() +1;
    var ano = fechaActual.getFullYear();
    var nomMes=nameMes(mes);
    var nomDia=nameDia(diasemana);
    var fecha = nomDia+" "+dia+" de "+nomMes+" del "+ano;
    $('#fecha').html(fecha);
}

function changeSelect(id){
    $('#list10').setGridParam({url:'/Implementation/Admin-estado-matricula/ObtenerAlumno.php?seleccionar='+id});
    $('#list10').trigger("reloadGrid");  
}
