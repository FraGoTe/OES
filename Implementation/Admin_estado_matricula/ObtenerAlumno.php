<?php

include "{$_SERVER['DOCUMENT_ROOT']}./Controllers/AdminEstadoMatriculaController.php";
//session_start();
$objMuestraData1 = new AdminEstadoMatriculaController();
$objMuestraEstado = new AdminEstadoMatriculaController();

@$alumnos = $objMuestraData1->getuserdata1($_REQUEST['seleccionar']);//cambiar
//$alumnos = $objMuestraData1->getuserdata($_SESSION['alu_cod']);
//return $alumnos;
                $i=0;
                $alum = "";
                $numRows = count($alumnos);
                //echo $alumnos[1]['alu_nom_completo'];
                while($numRows>$i)//$numRows>$i
		{
                    $estado = $objMuestraEstado->getuserestado($alumnos[$i]['alu_cod']);
                    if($numRows==$i-1)
                    {$alum .= "{cod:'".$alumnos[$i]['alu_cod']."',nombre:'".$alumnos[$i]['alu_nom_completo']."',estado:'".$estado."'}";
                     $i++;}
                     else{
                     $alum .= "{cod:'".$alumnos[$i]['alu_cod']."',nombre:'".$alumnos[$i]['alu_nom_completo']."',estado:'".$estado."'},";
                     $i++;}
		}
                //echo $alum;
                ?>

<script>
jQuery("#retorno").jqGrid({
        url:'server.php?q=2',
	datatype: "local",
	height: 250,
   	colNames:['C&oacute;digo','Nombre','Estado'],
   	colModel:[
   		{name:'cod',index:'cod', width:150, align:"left"},		
                {name:'nombre',index:'nombre', width:300, align:"left"},
                {name:'estado',index:'estado', width:150, align:"center"},
   	],
   	//multiselect: true,
   	caption: "ALUMNOS",
        ondblClickRow: function(rowid, status)
            {
                 var id = jQuery("#retorno").jqGrid('getGridParam','selrow');

                
                if (id) {
                  
                  record= jQuery("#retorno").jqGrid('getRowData',id);
                  
                    if(record.estado=="matriculado") 
                    {  

                      jQuery("#anidado").jqGrid({
                                url:'server.php?q=2',
                                datatype: "local", 
                                height: 250, 
                                colNames:['Periodo','C&oacute;digo', 'Turno', 'Secci&oacute;n','Asignatura','Creditos','Vez'], 
                                colModel:[ 
                                     {name:'per',index:'per', width:60, sorttype:"int"}, 
                                     {name:'cod',index:'cod', width:90, sorttype:"date"}, 
                                     {name:'tur',index:'tur', width:100}, 
                                     {name:'sec',index:'sec', width:80, align:"right",sorttype:"float"}, 
                                     {name:'asig',index:'asig', width:80, align:"right",sorttype:"float"}, 
                                     {name:'cre',index:'cre', width:80,align:"right",sorttype:"float"}, 
                                     {name:'vez',index:'vez', width:150} ], 
                                 caption: "BOLETA DE NOTAS"});
                             
                    }
                    else
                        alert("ALUMNO NO MATRICULADO")


                }
            }
});
var mydata = [
		<?php echo $alum;?>
		];
for(var i=0;i<=mydata.length;i++)
	jQuery("#retorno").jqGrid('addRowData',i+1,mydata[i]);
</script>   

