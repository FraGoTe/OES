<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

class ReporteController {

    public function reportedematricula(){
        $objAlumno = new Alumno();
        $pdf = new FPDF();
        
        $alumnos = $objAlumno->getAlumnosMatri();
        
        
        
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200,10,'REPORTE DE MATRICULADOS POR ESCUELA',1,1);
        
        foreach ($alumnos as $alumno) {
            if($alumno['alu_esc']=='IF')
                $carrer = 'Ingeniada qopwemqw';
            else
               $carrer = "peter se la come doblada";
            $pdf->SetFont('Arial','B',7);
        $pdf->Cell(50,10,@$alumno['alu_cod'],0,0);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(70,10,@$alumno['alu_nom_completo'],0,0);   
        $pdf->SetFont('Arial','',16);
        $pdf->Cell(70,10,$carrer,0,1);    
        }
        
        $pdf->Output();
    }
}

?>
