<?php
require "{$_SERVER['DOCUMENT_ROOT']}/Controllers/ReporteController.php";

$objReport = new ReporteController();
$objReport->reportedematricula();


?>
