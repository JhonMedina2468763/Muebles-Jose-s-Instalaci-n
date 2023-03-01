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
    $this->Cell(45,10,'Reporte de Productos',0,0,'C',0);
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
$consulta = "SELECT * FROM producto";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages ();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);


while($row = $resultado->fetch_assoc()){  
    $pdf->Cell(30, 12, $row['codproducto'], 1, 0, 'C', 0);
    $pdf->Cell(37, 12, $row['Categoria'], 1, 0, 'C', 0);
    $pdf->Cell(55, 12, $row['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(37, 12, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(37, 12, $row['existencia'], 1, 1, 'C', 0);
}


$pdf->Output();
?>
