<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

class ReporteController {

    public function reportedematricula($tipo){
        $objAlumno = new Alumno();
        $pdf = new FPDF();
        $alumnos = $objAlumno->getAlumnosMatri();
        
        if($tipo=="A")
        {
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,10,'REPORTE DE MATRICULADOS POR ESCUELA',1,1,'C');
        $pdf->Cell(190,5,'',0,1,'C');
        
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,'Ingenieria Informatica',1,1);
            foreach ($alumnos as $alumno) {
                if($alumno['alu_esc']=="IF"){
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(40,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(80,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(70,10,'Ingenieria Informatica',1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,'Ingenieria Electronica',1,1);
            foreach ($alumnos as $alumno) {
                if($alumno['alu_esc']=="IL"){
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(40,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(80,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(70,10,'Ingenieria Electronica',1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,'Ingenieria Telecomunicaciones',1,1);
            foreach ($alumnos as $alumno) {
                if($alumno['alu_esc']=="IT"){
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(40,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(80,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(70,10,'Ingenieria Telecomunicaciones',1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,'Ingenieria Mecatronica',1,1);
            foreach ($alumnos as $alumno) {
                if($alumno['alu_esc']=="IM"){
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(40,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(80,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',12);
                    $pdf->Cell(70,10,'Ingenieria Mecatronica',1,1);    
                    }
                    }        
            $pdf->Cell(190,5,'',0,1,'C');
        
        
        
        $pdf->Output();
        }
        else
            echo "Aun no definido";
            }
}

?>
