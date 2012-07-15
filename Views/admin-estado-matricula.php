<p align="center">OFICINA DE SERVICIOS ACAD&Eacute;MICOS</p>
<p align="center">Administrador: <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="" disabled=""/></p>
<table width="545" height="30" border="0" align="center">
  <tr>
    <td width="162" align="center">Facultad:    
    <input class="span1" type="text" id="disabledInput2" placeholder="FIEI" disabled="disabled"/>
    </td>
<td width="267" align="center"><p>Escuela: <select id="seleccionar" name="seleccionar" onChange="changeSelect(this.value)">
                <option value="IF" selected="selected">Inform&aacute;tica</option>
                <option value="IL">Eletr&oacute;nica</option>
                <option value="IT">Telecomunicaciones</option>
                <option value="IM">Mecatr&oacute;nica</option>
              </select></p></td>

    <td width="100" align="center">A&ntilde;o: 2013</td>
  </tr>
</table>
<div id="grilla" align="center">
<table id="retorno"></table>
</div>
<br></br>
<div align="center">
<table id="list10"></table>
<div id="pager10"></div>
</div>
<br></br>
<div align="center">
<table id="list10_d"></table>
<div id="pager10"></div>
</div>
<!-- <a href="javascript:void(0)" id="ms1">Get Selected id's</a> -->

<script>
jQuery("#list10").jqGrid({ 
    url:'/Implementation/Admin-estado-matricula/ObtenerAlumno.php?seleccionar=IF', 
    datatype: "json", 
    colNames:['C&oacute;digo','Nombre','Estado'], 
    colModel:[ {name:'ALU_COD',index:'ALU_COD', width:150}, 
               {name:'ALU_NOM_COMPLETO',index:'ALU_NOM_COMPLETO', width:300}, 
               {name:'MAT_ESTADO',index:'MAT_ESTADO', width:150}
             ],
    rowNum:50, 
   /* rowList:[10,20,30], */
    pager: '#pager10', 
    sortname: 'ALU_NOM_COMPLETO', 
    viewrecords: true, 
    sortorder: "asc", 
    multiselect: false, 
    caption: "Alumnos por Escuela", 
    onSelectRow: function(ids) 
                 { 
      
                    if(ids == null) 
                    { 
                        nomcompleto= jQuery("#list10").jqGrid('getRowData',ids);
                        ids=0; 
                        
                        if(jQuery("#list10_d").jqGrid('getGridParam','records') >0 ) 
                        { 
                            jQuery("#list10_d").jqGrid('setGridParam',
                            {
                                url:'/Implementation/Admin-estado-matricula/ObtenerCursoAlum.php?codigoalum='+ids,page:1}); 
                                jQuery("#list10_d").jqGrid('setCaption',"Alumno: "+nomcompleto.ALU_NOM_COMPLETO) .trigger('reloadGrid'); 
                        } 
                    } 
                    else 
                    { 
                        nomcompleto= jQuery("#list10").jqGrid('getRowData',ids);
                        jQuery("#list10_d").jqGrid('setGridParam',
                        {
                            url:'/Implementation/Admin-estado-matricula/ObtenerCursoAlum.php?codigoalum='+ids,page:1}); 
                            jQuery("#list10_d").jqGrid('setCaption',"Alumno: "+nomcompleto.ALU_NOM_COMPLETO) .trigger('reloadGrid'); 
                    } 
                 } });
jQuery("#list10").jqGrid('navGrid','#pager10',{add:false,edit:false,del:false}); 
jQuery("#list10_d").jqGrid({ 
    height: 300, 
    //url:'/Implementation/Admin-estado-matricula/ObtenerCursoAlum.php?codigoalum=2007236935', 
    datatype: "json", 
    colNames:['Periodo','C&oacute;digo', 'Turno', 'Secci&oacute;n','Asignatura','Creditos','Vez'], 
    colModel:[ {name:'cua_per',index:'cua_per', width:55, align:"center"}, 
               {name:'cur_cod',index:'cur_cod', width:55, align:"center"}, 
               {name:'cua_turn',index:'cua_turn', width:40, align:"center"}, 
               {name:'cua_sec',index:'cua_sec', width:45, align:"center"}, 
               {name:'cur_nom',index:'cur_nom', width:300, align:"left"}, 
               {name:'cur_cred',index:'cur_cred', width:35, align:"center"}, 
               {name:'cua_vez',index:'cua_vez', width:30,align:"center", sortable:false, search:false} ], 
    rowNum:10, 
    //rowList:[5,10,20], 
    pager: '#pager10_d', 
    sortname: 'cur_cod', 
    viewrecords: true, 
    sortorder: "asc", 
   // multiselect: true, 
    caption:"Alumno" }).navGrid('#pager10_d',{add:false,edit:false,del:false}); 
jQuery("#ms1").click( function() 
{ 
    var s; 
    s = jQuery("#list10_d").jqGrid('getGridParam','selarrrow'); alert(s); });
</script>