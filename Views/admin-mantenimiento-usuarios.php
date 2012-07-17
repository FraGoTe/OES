<fieldset>
    <legend>Mantenimiento Alumnos</legend>
<div id="grilla" align="center">
<table id="retorno"></table>
</div>
<br></br>
<div align="center"></div>

<br />
<table id="list10" ></table>
<div id="pager10"></div>
</div>
<br></br>
<div>
<table id="list10_d"></table>
<div id="pager10"></div>
</div>
<br></br>
<div style="width: 100%; text-align: center;">
    <form target="reporte" action="/Controllers/BoletaMatriculaController.php"> 
        <input type="hidden" id="alu_cod" name="alu_cod" value="" />
    <button align="right" id="impBoleta" class="btn btn-small btn-primary" >Imprimir Boleta</button>
    <form/>
  </div>
</fieldset>
<!-- <a href="javascript:void(0)" id="ms1">Get Selected id's</a> -->
<script>
jQuery("#list10").jqGrid({ 
    url:'/Implementation/Admin-estado-matricula/ObtenerAllAlumnos.php', 
    datatype: "json", 
    colNames:['C&oacute;digo','Nombre'], 
    colModel:[ {name:'ALU_COD',index:'ALU_COD', width:150,search:true}, 
               {name:'ALU_NOM_COMPLETO',index:'ALU_NOM_COMPLETO', width:300,search:true}   
             ],
    rowNum:2450, 
    width: 650,
    height: 400,
   /* rowList:[10,20,30], */
    pager: '#pager10', 
    sortname: 'ALU_NOM_COMPLETO', 
    viewrecords: true, 
    sortorder: "asc", 
    multiselect: false, 
    caption: "Alumnos por Escuela",
    onSelectRow: function(ids) 
                 { 
                    $("#alu_cod").val(ids);
                    
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



jQuery("#ms1").click( function() 
{ 
    var s; s = jQuery("#list10_d").jqGrid('getGridParam','selarrrow'); alert(s); 
});
</script>