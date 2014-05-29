<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

        $objAlumno = new Alumno();
        
        $tam_pers[0]=135;
        $tam_pers[1]=225;
        
        $pdf = new FPDF('L','mm',$tam_pers);
        
        $alumnos = $objAlumno->getAllCursos($_REQUEST['alu_cod']);
        $creditos=0;
        $fecha=$alumnos[0]['mat_fecha'];
        $hora=substr($fecha,10,18);
        $fecha=substr($fecha,0,10);
        $aaaa=substr($fecha,0,4);
        $mm=substr($fecha,5,2);
        $dd=substr($fecha,8,10);
        $fecha=$dd."/".$mm."/".$aaaa;
        switch ($alumnos[0]['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                           default :
                }
        switch ($alumnos[0]['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('01');
                               break;
                    case "2": $anio=@utf8_decode('02');
                               break;
                    case "3": $anio=@utf8_decode('03');
                               break;
                    case "4": $anio=@utf8_decode('04');
                               break;
                    case "5": $anio=@utf8_decode('05');
                               break;
                }
        
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(200,8,@utf8_decode('Boleta de Matrícula'),0,1,'C');
        $pdf->Cell(200,0,'',1,1,'C');
        
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(140,4,'',0,0);
        $pdf->Cell(30,4,'Fecha: '.$fecha,0,0);
        $pdf->Cell(30,4,utf8_decode('Hora: '.$hora),0,1);
        
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(80,4,'Alumno: '.$alumnos[0]['alu_nom_completo'],0,0);
        $pdf->Cell(80,4,'Escuela: '.$carrera,0,0);
        $pdf->Cell(40,4,utf8_decode('Código: '.$alumnos[0]['alu_cod']),0,1);  
        
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(80,4,utf8_decode('Facultad: INGENIERÍA ELECTRÓNICA E INFORMÁTICA'),0,0);
        $pdf->Cell(80,4,'Nivel: '.$anio,0,0);
        $pdf->Cell(40,4,utf8_decode(''),0,1);  
        $pdf->Cell(200,0,'',1,1,'C');
        
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(15,4,'Per.',0,0,'C');
        $pdf->Cell(15,4,utf8_decode('Código'),0,0,'C');  
        $pdf->Cell(10,4,'Tur.',0,0,'C');
        $pdf->Cell(10,4,'sec.',0,0,'C');
        $pdf->Cell(130,4,'Asignaturas',0,0,'C');
        $pdf->Cell(10,4,utf8_decode('Créd.'),0,0,'C');
        $pdf->Cell(10,4,'Vez.',0,1,'C');
        $pdf->Cell(200,0,'',1,1,'C');
        
        foreach ($alumnos as $alumno) {
                $pdf->SetFont('Arial','B',7);
                $pdf->Cell(15,4,@$alumno['cua_per'],0,0,'C');
                $pdf->Cell(15,4,@$alumno['cur_cod'],0,0,'C');  
                $pdf->Cell(10,4,@$alumno['cua_turn'],0,0,'C');
                $pdf->Cell(10,4,@$alumno['cua_sec'],0,0,'C');
                $pdf->Cell(130,4,@$alumno['cur_nom'],0,0);
                $pdf->Cell(10,4,@$alumno['cur_cred'],0,0,'C');
                $pdf->Cell(10,4,@$alumno['cua_vez'],0,1,'C');
                $creditos+=$alumno['cur_cred'];
        }
        
        $pdf->Cell(200,0,'',1,1,'C');
        $pdf->Cell(155,4,'',0,0,'C');
        $pdf->Cell(25,4,utf8_decode('Total de créditos:'),0,0);
        $pdf->Cell(10,4,$creditos,0,1,'C');
        $pdf->Cell(10,4,'',0,1,'C');
        
        $pdf->Output();
?>
