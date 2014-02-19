<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

class ReporteController {

    public function reportedematricula($tipo){
        $objAlumno = new Alumno();
        $pdf = new FPDF();
        $alumnos = $objAlumno->getAlumnosMatri();
        $alumnosnomatri = $objAlumno->getAlumnosNoMatri();
        $usuarios = $objAlumno->getUsuPass();
        
        if($tipo=="A")
        {
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,10,'REPORTE DE MATRICULADOS POR ESCUELA',0,1,'C');
        $pdf->Cell(190,5,'',0,1,'C');
        
            //Ingeniería Informática
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Informática'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C'); 
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                }$anio = '2013';
                if($alumno['alu_esc']=="IF"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$anio,1,1,'C');    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Ingeniería Electrónica
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Electrónica'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C');
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                }$anio = '2013';
                if($alumno['alu_esc']=="IL"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$anio,1,1,'C');    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Ingeniería Telecomunicaciones
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Telecomunicaciones'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C');
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                    default : $anio=@utf8_decode('Año');
                               break;
                }
                if($alumno['alu_esc']=="IT"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$anio,1,1,'C');    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Ingeniería Mecatrónica
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Mecatrónica'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C');
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                }$anio = '2013';
                if($alumno['alu_esc']=="IM"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$anio,1,1,'C');    
                    }
                    }        
            $pdf->Cell(190,5,'',0,1,'C');
            $pdf->Output();
        }
        
        else if($tipo=="B")
        {
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,10,@utf8_decode('REPORTE DE MATRICULADOS POR AÑO'),0,1,'C');
        $pdf->Cell(190,5,'',0,1,'C');
            
            //Primer Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Primer Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($alumno['alu_nivel']=="1"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Segundo Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Segundo Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($alumno['alu_nivel']=="2"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Tercer Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Tercer Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($alumno['alu_nivel']=="3"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
        
            //Cuarto Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Cuarto Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($alumno['alu_nivel']=="4"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Quinto Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Quinto Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnos as $alumno) {
                switch ($alumno['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($alumno['alu_nivel']=="5"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumno['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            $pdf->Output();
        }
        
        else if($tipo=="C")
        {
            $pdf->AddPage();
        
            $pdf->SetFont('Arial','B',16);
            $pdf->Cell(190,10,@utf8_decode('REPORTE'),0,1,'C');
            $pdf->Cell(190,10,@utf8_decode('ALUMNOS NO MATRICULADOS POR AÑO'),0,1,'C');
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Primer Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Primer Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($nomatri['alu_nivel']=="1"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');    
            
            //Segundo Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Segundo Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($nomatri['alu_nivel']=="2"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Tercer Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Tercer Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($nomatri['alu_nivel']=="3"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Cuarto Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Cuarto Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($nomatri['alu_nivel']=="4"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Quinto Año
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Quinto Año'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,'Carrera',1,1,'C'); 
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_esc'])
                {
                    case "IF": $carrera=@utf8_decode('Ingeniería Informática');
                               break;
                    case "IL": $carrera=@utf8_decode('Ingeniería Electrónica');
                               break;
                    case "IT": $carrera=@utf8_decode('Ingeniería Telecomunicaciones');
                               break;
                    case "IM": $carrera=@utf8_decode('Ingeniería Mecatrónica');
                               break;
                }
                if($nomatri['alu_nivel']=="5"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$carrera,1,1);    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');  
            $pdf->Output();
        }
        
        else if($tipo=="D")
        {
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,10,@utf8_decode('REPORTE'),0,1,'C');
        $pdf->Cell(190,10,@utf8_decode('ALUMNOS NO MATRICULADOS POR ESCUELA'),0,1,'C');
        $pdf->Cell(190,5,'',0,1,'C');
        
            //Ingeniería Informática
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Informática'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C'); 
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                }
                if($nomatri['alu_esc']=="IF"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$anio,1,1,'C');    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Ingeniería Electrónica
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Electrónica'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C');
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                }
                if($nomatri['alu_esc']=="IL"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$nomatri['alu_nom_completo'],1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$anio,1,1,'C');    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Ingeniería Telecomunicaciones
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Telecomunicaciones'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C');
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                    default : $anio=@utf8_decode('Año');
                               break;
                }
                if($nomatri['alu_esc']=="IT"){
                    $codit=@$nomatri['alu_cod'];
                    $almit=@$nomatri['alu_nom_completo'];
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$codit,1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$almit,1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$anio,1,1,'C');    
                    }
                    }
            $pdf->Cell(190,5,'',0,1,'C');
            
            //Ingeniería Mecatrónica
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(190,10,@utf8_decode('Ingeniería Mecatrónica'),0,1);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0,'C');   
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Año'),1,1,'C');
            foreach ($alumnosnomatri as $nomatri) {
                switch ($nomatri['alu_nivel'])
                {
                    case "1": $anio=@utf8_decode('Primer Año');
                               break;
                    case "2": $anio=@utf8_decode('Segundo Año');
                               break;
                    case "3": $anio=@utf8_decode('Tercer Año');
                               break;
                    case "4": $anio=@utf8_decode('Cuarto Año');
                               break;
                    case "5": $anio=@utf8_decode('Quinto Año');
                               break;
                }
                if($nomatri['alu_esc']=="IM"){
                    $codim=@$nomatri['alu_cod'];
                    $almim=@$nomatri['alu_nom_completo'];
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$codim,1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$almim,1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$anio,1,1,'C');    
                    }
                    }        
            $pdf->Cell(190,5,'',0,1,'C');
            $pdf->Output();
        }
        else if($tipo=="E")
        {
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,10,@utf8_decode('REPORTE DE USUARIOS Y CONTRASEÑAS DE LOS ESTUDIANTES'),0,1,'C');
        $pdf->Cell(190,5,'',0,1,'C');
        
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(95,10,@utf8_decode('Nombre Completo'),1,0);
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(30,10,@utf8_decode('Código'),1,0,'C');
            $pdf->SetFont('Arial','B',14);
            $pdf->Cell(65,10,@utf8_decode('Contraseña'),1,1,'C');   
             
            foreach ($usuarios as $usuario) 
            {
                    $codig = @$usuario['alu_cod'];
                    $alumn = @$usuario['alu_nom_completo'];
                    $pass = $this->generarPassw1($codig);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@$alumn,1,0);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$codig,1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,@$pass,1,1,'C');    
           }
                    
            $pdf->Cell(190,5,'',0,1,'C');
            $pdf->Output();
        }
        else if($tipo=="F")
        {
        /*$pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,10,@utf8_decode('REPORTE DE USUARIOS Y CONTRASEÑAS DE LOS ESTUDIANTES'),0,1,'C');
        $pdf->Cell(190,5,'',0,1,'C');*/
             
             
            $i=0;
            foreach ($usuarios as $usuario) 
            {
                    $codig = @$usuario['alu_cod'];
                    $alumn = @$usuario['alu_nom_completo'];
                    $pass = $this->generarPassw1($codig);
                    if($i%4==0)
                    {
                        $pdf->AddPage();
                    }
                        $pdf->SetFont('Arial','B',14);
                        $pdf->Cell(200,10,'Estimado(a): '.@$alumn,0,1);
                        
                        $pdf->SetFont('Arial','',10);
                        
                        $pdf->Cell(95,2,@utf8_decode('Mediante la presente carta se le envía, su contraseña de ingreso al sistema de matricula de la Facultad de'),0,1);
                        $pdf->Cell(95,6,@utf8_decode('de Ingeniería Electrónica e Informática (FIEI).'),0,1);
                        $pdf->Cell(95,6,'',0,1);
                        
                        $pdf->Cell(70,10,'',0,0);
                        $pdf->SetFont('Arial','B',14);
                        $pdf->Cell(30,10,@$pass,1,0,'C');
                        $pdf->Cell(95,10,'',0,1);
                        $pdf->SetFont('Arial','',10);
                        $pdf->Cell(65,8,'',0,1,'C');
                        $pdf->Cell(95,2,@utf8_decode(' (*) Siendo el usuario de ingreso su codigo del estudiante.'),0,1);
                        $pdf->Cell(95,6,@utf8_decode('(**) Solicitamos que realice el cambio de su contraseña la primera vez que ingrese por medidas de seguridad.'),0,1);
                        $pdf->Cell(65,8,'',0,1,'C');
                        $pdf->Ln($i+10);
                    ++$i;
           }                
            $pdf->Cell(190,5,'',0,1,'C');
            $pdf->Output();
        }
        else
            echo "Aun no definido";
     }
     
     public function generarPassw1($cod)
      {
          $x=$cod;
          $tamanio=strlen($x);
          $codigo=array();
          $letra = array('M','A','X','N','Y','E','P','Z','I','R');

            if($tamanio==10)
            {
                $j=9;
                for($i=0; $i<$tamanio-3; $i++)
                {
                    $codigo[$i]=$x[$j];
                    --$j; 
                } 
            }
            else
            {
                $j=6;
                for($i=0; $i<$tamanio; $i++)
                {
                    $codigo[$i]=$x[$j];
                    --$j;
                }    
            }

            //SUMAMOS 1 A LOS PARES Y RESTAMOS 1 A LOS IMPARES
            for($i=0; $i<7; $i++)
            {   
                if($codigo[$i]%2==0)        
                    ++$codigo[$i];
                else
                    --$codigo[$i];
            }

            for($i=0; $i<7; $i++)
            {
                for($j=0; $j<10; $j++)
                        if(($codigo[$i]==$j)&&(($i==0)||($i==3)||($i==4)||($i==5)))
                            $codigo[$i]=$letra[$j];  
            }

            $encriptado=$codigo[0].$codigo[1].$codigo[2].$codigo[3].$codigo[4].$codigo[5].$codigo[6];
      
          return $encriptado;
      }
            
            
}



?>
