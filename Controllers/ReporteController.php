<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/Library/fpdf17/fpdf.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}/Models/Alumno.php";

class ReporteController {

    public function reportedematricula($tipo){
        $objAlumno = new Alumno();
        $pdf = new FPDF();
        $alumnos = $objAlumno->getAlumnosMatri();
        $alumnosnomatri = $objAlumno->getAlumnosNoMatri();
        
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
                }
                if($alumno['alu_esc']=="IF"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                }
                if($alumno['alu_esc']=="IL"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                }
                if($alumno['alu_esc']=="IM"){
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$alumno['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$alumno['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
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
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,10,@$nomatri['alu_cod'],1,0,'C');
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(95,10,@utf8_decode(@$nomatri['alu_nom_completo']),1,0);   
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(65,10,$anio,1,1,'C');    
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
