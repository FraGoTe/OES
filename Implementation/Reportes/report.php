<?php
require "{$_SERVER['DOCUMENT_ROOT']}/Controllers/ReporteController.php";

if (isset($_POST['enviar']) && isset($_POST['report'])) {
    $objReport = new ReporteController();
    
    $selected_radio = $_POST['report'];
    $objReport->reportedematricula($selected_radio);
}
else
    {
{?>
    <script type="text/javascript">
        alert("Elija una opcion por favor");
        this.close();
    </script>
    <?php
}
    }

    


?>
