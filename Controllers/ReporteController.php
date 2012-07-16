<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";

class ReporteController {

    public function reportedematricula(){
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(90,10,'¡Hola, Mundo!',1,1);
        $pdf->Output();
    }
}

?>
