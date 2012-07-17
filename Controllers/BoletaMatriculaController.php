<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

        $objAlumno = new Alumno();
        
        $tam_pers[0]=135;
        $tam_pers[1]=225;
        
        $pdf = new FPDF('L','mm',$tam_pers);
        
        $alumnos = $objAlumno->getAllCursos($_REQUEST['alu_cod']);
        
        
        
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200,10,'REPORTE DE MATRICULADOS POR ESCUELA',1,1);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(15,4,'Per.',0,0);
        $pdf->Cell(15,4,utf8_decode('Código'),0,0);  
        $pdf->Cell(4,4,'Tur.',0,0);
        $pdf->Cell(4,4,'sec.',0,0);
        $pdf->Cell(140,4,'Asignaturas',0,0);
        $pdf->Cell(5,4,utf8_decode('Créd.'),0,0);
        $pdf->Cell(4,4,'Vez.',0,1);
        
        foreach ($alumnos as $alumno) {
            /*if($alumno['alu_esc']=='IF')
                $carrer = 'Ingeniada qopwemqw';
            else
               $carrer = "maymay";*/
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(15,4,@$alumno['cua_per'],0,0);
        $pdf->Cell(15,4,@$alumno['cur_cod'],0,0);  
        $pdf->Cell(4,4,@$alumno['cua_turn'],0,0);
        $pdf->Cell(4,4,@$alumno['cua_sec'],0,0);
        $pdf->Cell(140,4,@$alumno['cur_nom'],0,0);
        $pdf->Cell(5,4,@$alumno['cur_cred'],0,0);
        $pdf->Cell(4,4,@$alumno['cua_vez'],0,1);
        }
        
        $pdf->Output();
?>