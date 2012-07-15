<?php
include '../Implementation/Admin-estado-matricula/ObtenerAlumno.php';
//@$alumnos = $alumnos[0];
//include '../Layout/left.php';

$numRows = count($alumnos);
//@$alumnos= $alumnos[0];
?>
<p align="center">OFICINA DE SERVICIOS ACADÉMICOS</p>
<p align="center">Administrador: <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="" disabled=""/></p>
<table width="545" height="30" border="0" align="center">
  <tr>
    <td width="162" align="center">Facultad:    
    <input class="span1" type="text" id="disabledInput2" placeholder="FIEI" disabled="disabled"/>
    </td>
<td width="267" align="center"><p>Escuela: <select id="seleccionar" name="seleccionar" onChange="changeSelect(this.value)">
                <option value="II" selected="selected">Seleccionar</option>
                <option value="IF">Informática</option>
                <option value="IL">Eletrónica</option>
                <option value="IT">Telecomunicaciones</option>
                <option value="IM">Mecatrónica</option>
              </select></p></td>

    <td width="100" align="center">Año: 2013</td>
  </tr>
</table>
<div id="grilla" align="center">
<table id="retorno"></table>
</div>
<br></br>
<div align="center">
<table id="navgrid"></table>
</div>
