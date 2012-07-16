
<iframe id="frames" name="frame" style="display: none;" ></iframe>

<form class="form-horizontal" target="frames" action="/Implementation/Reportes/report.php">
    <fieldset>
        <legend>Reportes</legend>
        <div class="control-group">
            <label class="radio">
                <input type="radio" id="report" name="report"> Alumnos Matriculados por Escuela
            </label>
        </div><div class="control-group">
            <label class="radio">
                <input type="radio"  id="report" name="report"> Alummos Matriculados por A&ntilde;o
            </label>
        </div> <div class="control-group">
            <label class="radio">
                <input type="radio" id="report" name="report"> Alumnos NO matriculados x A&ntilde;o
            </label>
        </div>
        <div class="control-group">
            <label class="radio">
                <input type="radio" id="report" name="report"> Alumnos que NO se pueden matricular
            </label>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Reporte</button>
        </div>
    </fieldset>
</form>