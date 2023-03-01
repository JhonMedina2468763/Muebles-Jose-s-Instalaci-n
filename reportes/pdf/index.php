<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',23);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(45,10,'Reporte de Usuarios',0,0,'C',0);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consulta = "SELECT * FROM usuarios";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages ();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);


while($row = $resultado->fetch_assoc()){  
    $pdf->Cell(40, 12, $row['nombres'], 1, 0, 'C', 0);
    $pdf->Cell(40, 12, $row['apellidos'], 1, 0, 'C', 0);
    $pdf->Cell(70, 12, $row['correo'], 1, 0, 'C', 0);
    $pdf->Cell(40, 12, $row['usuario'], 1, 1, 'C', 0);
}


$pdf->Output();
?>
