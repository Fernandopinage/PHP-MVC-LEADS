<?php
require('../fdpf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>