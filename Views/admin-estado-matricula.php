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
<div align="center"></div>

<br />
<table id="list10"></table>
<div id="pager10"></div>
<script>
jQuery("#list10").jqGrid({ 
    url:'/Implementation/Admin-estado-matricula/ObtenerAlumno.php?seleccionar=IF', 
    datatype: "json", 
    colNames:['C&oacute;digo','Nombre','Estado'], 
    colModel:[ {name:'ALU_COD',index:'ALU_COD', width:150,search:true}, 
               {name:'ALU_NOM_COMPLETO',index:'ALU_NOM_COMPLETO', width:300,search:true}, 
               {name:'MAT_ESTADO',index:'MAT_ESTADO', width:150,search:true}
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
                        ids=0; 
                        if(jQuery("#list10_d").jqGrid('getGridParam','records') >0 ) 
                        { 
                            jQuery("#list10_d").jqGrid('setGridParam',
                            {
                                url:"subgrid.php?q=1&id="+ids,page:1}); 
                                jQuery("#list10_d").jqGrid('setCaption',"Invoice Detail: "+ids) .trigger('reloadGrid'); 
                        } 
                    } 
                    else 
                    { 
                        jQuery("#list10_d").jqGrid('setGridParam',
                        {
                            url:"subgrid.php?q=1&id="+ids,page:1}); 
                            jQuery("#list10_d").jqGrid('setCaption',"Invoice Detail: "+ids) .trigger('reloadGrid'); 
                    } 
                 } });
jQuery("#list10").jqGrid('navGrid','#pager',{edit:true,add:true,del:true,search:true,refresh:true});
jQuery("#list10").jqGrid('navButtonAdd',"#pager",{caption:"Toggle",title:"Toggle Search Toolbar", buttonicon :'ui-icon-pin-s',
        onClickButton:function(){
                $("#list10")[0].toggleToolbar()
        }
});
jQuery("#list10").jqGrid('navButtonAdd',"#pager",{caption:"Clear",title:"Clear Search",buttonicon :'ui-icon-refresh',
        onClickButton:function(){
                $("#list10")[0].clearToolbar()
        }
});
jQuery("#list10").jqGrid('filterToolbar');             
/*$("#list10").jqGrid('filterToolbar', {
    stringResult : true,
    searchOnEnter : false
});*/
//jQuery("#list10").jqGrid('navGrid','#pager10',{add:false,edit:false,del:false,search:true, searchtext:"Buscar"}); 


jQuery("#list10_d").jqGrid({ 
    height: 100, 
    url:'subgrid.php?q=1&id=0', 
    datatype: "json", 
    colNames:['No','Item', 'Qty', 'Unit','Line Total'], 
    colModel:[ {name:'num',index:'num', width:55}, 
               {name:'item',index:'item', width:180}, 
               {name:'qty',index:'qty', width:80, align:"right"}, 
               {name:'unit',index:'unit', width:80, align:"right"}, 
               {name:'linetotal',index:'linetotal', width:80,align:"right", sortable:false, search:false} ], 
    rowNum:5, 
    rowList:[5,10,20], 
    pager: '#pager10_d', 
    sortname: 'item', 
    viewrecords: true, 
    sortorder: "asc", 
    multiselect: true, 
    caption:"Invoice Detail" }).navGrid('#pager10_d',{add:false,edit:false,del:false}); 
jQuery("#ms1").click( function() 
{ 
    var s; s = jQuery("#list10_d").jqGrid('getGridParam','selarrrow'); alert(s); });

</script>