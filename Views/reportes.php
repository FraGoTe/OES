
<iframe id="frames" name="frame" style="display: none;" ></iframe>

<form class="form-horizontal" target="frames" action="/Implementation/Reportes/report.php" method="post">
    <fieldset>
        <legend>Reportes</legend>
        <div class="control-group">
            <label class="radio">
                <input type="radio" id="report" name="report" value="A"> Alumnos Matriculados por Escuela
            </label>
        </div><div class="control-group">
            <label class="radio">
                <input type="radio"  id="report" name="report" value="B"> Alummos Matriculados por A&ntilde;o
            </label>
        </div> <div class="control-group">
            <label class="radio">
                <input type="radio" id="report" name="report" value="C"> Alumnos NO matriculados por A&ntilde;o
            </label>
        </div>
        <div class="control-group">
            <label class="radio">
                <input type="radio" id="report" name="report" value="D"> Alumnos que NO se pueden matricular
            </label>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn" name="enviar">Reporte</button>
        </div>
    </fieldset>
</form>