<script>
    function change(url,id){
        var idold = $(".active").attr('id');
        $("#"+idold).removeAttr('class');
        $("#"+id).attr('class','active');
    $.ajax({
        url: url,
        dataType: 'html',
        type: "POST",        
        success: function(datos){
               $("#conten").html(datos);
        }
    });  
}
</script>
<div class="well" style="width: 250px; padding: 8px 0; float:left;">
    <ul class="nav nav-list">
        <li class="nav-header">Mis Datos</li>
        <li id="ini" class="active">
            <a href="index.php">
                <i class="icon-white icon-home"></i>
                Inicio
            </a>
        </li>
        <li id="misda" >

       <a onclick="change('muestra-datos.php','misda')">
                <i class="icon-white icon-user"></i>
                Mis datos
        </a>
        </li>
        <?php
        if($_SESSION["usulogin"] == $_SESSION["usupass"]) {
        ?>
        <li id="cambiapass" >
            <a  onclick="change('cambiar-contrasena.php','cambiapass')" >
                <i class="icon-white icon-cog"></i>
                Cambiar contrase&ntilde;a
            </a>
        </li>
        <?php  } ?>
        <li class="nav-header">Matricula 2013</li>
        <?php
        if($_SESSION["rol"] == "alum") {
        ?>
        <li id="matri" >
            <a  onclick="change('operacion-banco.php','matri')" >
                <i class="icon-white icon-cog"></i>
                Matricula Online
            </a>
        </li>
        <?php
        }else{
            ?>
            <li id="matri" >
            <a  onclick="change('admin-estado-matricula.php','matri')" >
                <i class="icon-white icon-cog"></i>
                Matricula Online
            </a>
            </li>
            <li id="report" >
            <a  onclick="change('reportes.php','report')" >
                <i class="icon-white icon-cog"></i>
                Reportes
            </a>
            </li>
        <?php
        }
        ?>
        
        <li class="nav-header">Descargas</li>
         <li id="reg">
             <a onclick="change('reg.php','reg')">
                <i class="icon-white icon-book"></i>
                Reglamento
            </a>
        </li>
        <li id="minf">
            <a onclick="change('minf.php','minf')">
                <i class="icon-white icon-book"></i>
                Malla Curricular IF
            </a>
        </li>
        <li id="mele">
            <a onclick="change('mele.php','mele')">
                <i class="icon-white icon-book"></i>
                Malla Curricular IE
            </a>
        </li>
        <li id="mtel">
            <a onclick="change('mtel.php','mtel')">
                <i class="icon-white icon-book"></i>
                Malla Curricular IT
            </a>
        </li>
        <li id="mmec">
            <a onclick="change('mmec.php','mmec')">
                <i class="icon-white icon-book"></i>
                Malla Curricular IM
            </a>
        </li> 
        <li id="pinf">
            <a onclick="change('pinf.php','pinf')">
                <i class="icon-white icon-book"></i>
                Plan Curricular IF
            </a>
        </li>
        <li id="pele">
            <a onclick="change('pele.php','pele')">
                <i class="icon-white icon-book"></i>
                Plan Curricular IE
            </a>
        </li>
        <li id="ptel">
            <a onclick="change('mtel.php','ptel')">
                <i class="icon-white icon-book"></i>
                Plan Curricular IT
            </a>
        </li>
        <li id="pmec">
            <a onclick="change('mmec.php','pmec')">
                <i class="icon-white icon-book"></i>
                Plan Curricular IM
            </a>
        </li>
    </ul>
</div>
<div id="conten" style="border: 100px black; float:left; width: 670px; margin-left: 10px;">