<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

/* $id = $_GET["id"]; */
$herramienta = $_POST["idclase"];
var_dump($herramienta);
/* 
$pdf = new FPDF('P','mm','Letter');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,1); 
$pdf->SetMargins(5, 5 , 5);
$pdf->SetFont('Arial','B',12);
$pdf->Image('../../assest/imagenes/logosae1.png',10,10,-200);
$pdf->Cell(190, 30, 'LISTA DE EQUIPOS Y HERRAMIENTAS', 0, 2, 'C');
$pdf->setY(33);
$pdf->Cell(190, 0, 'CALIBRE', 0, 1, 'C');

$pdf->SetFont('Arial','',9);
$pdf->setY(15);
$pdf->setX(160);
$pdf->SetFillColor(215,211,189);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(35, 5, 'CERTIFICACIONES', 0, 1, 'C');
$pdf->setY(20);
$pdf->setX(160);
$pdf->SetFont('Arial','',9);
$pdf->Cell(35, 5, 'DGAC BOLIVIA OMA No N-017', 0, 2, 'C');
$pdf->setY(25);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC CHILE E-448', 0, 2, 'C');
$pdf->setY(30);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC PERU OMAE No 019', 0, 2, 'C');

$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(61,140,205);
$pdf->setY(40);
$pdf->SetFont('Helvetica','B',8);
$pdf->setX(8);
$pdf->Cell(10, 8, 'ITEM', 1, 0, 'C',true);
$pdf->setX(18);
$pdf->Cell(44, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C',true);
$pdf->setX(62);
$pdf->Cell(23, 8, utf8_decode('NRO DE PARTE'), 1, 0, 'C',true);
$pdf->setX(85);
$pdf->Cell(21, 8, utf8_decode('NRO DE SERIE'), 1, 0, 'C',true);
$pdf->setX(106);
$pdf->Cell(17, 8, utf8_decode('CÓDIGO'), 1, 0, 'C',true);
$pdf->setX(123);
$pdf->Cell(21, 8, utf8_decode('FECHA CAL.'), 1, 0, 'C',true);
$pdf->setX(144);
$pdf->Cell(20, 8, utf8_decode('FECHA VENC.'), 1, 0, 'C',true);
$pdf->setX(164);
$pdf->Cell(31, 8, utf8_decode('UBICACIÓN'), 1, 0, 'C',true);
$pdf->setX(195);
$pdf->SetFont('Helvetica','B',7);
$pdf->MultiCell(14, 4, utf8_decode('No CARPETA'), 1, 0, 'C',true);


$pdf->Output(); */
?>