<?php
require "fpdf.php";
require_once("../bd/conexion.php");
class PDF extends FPDF{
  function Header()
{
    // Logo     el 8 define el tama�o el 10 es un tab, el 8 es lineas
    $this->Image('../img/logo.png',10,8,30);
    $this->Image('../img/logo.png',170,8,30);
}
}
//CREACION DE LA HOJA
//$years=$_GET['years'];
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'OPTICA MIRAMOS POR TI',0,1,'C');
$pdf->Cell(0,5,'PRODUCTOS REGISTRADOS ',0,1,'C');


  $pdf->Ln();

  
 
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select codigo,tipo,tipo_armazon,cantidad,precio,descripcion from productos"); 

  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(30,5, "Codigo de Producto",1,0,'C');
    $pdf->Cell(30,5, "Tipo de Lentes",1,0,'C');
    $pdf->Cell(30,5, "Tipo de Armazon",1,0,'C');
    $pdf->Cell(25,5, "Cantida de lentes",1,0,'C');
    $pdf->Cell(25,5, "Precio Unitario",1,0,'C');
    $pdf->Cell(30,5, "Descripcion",1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
   
    $pdf->Cell(30,5, $row['codigo'],1,0,'C');
    $pdf->Cell(30,5, $row['tipo'],1,0,'C');
    $pdf->Cell(30,5, $row['tipo_armazon'],1,0,'C');
    $pdf->Cell(25,5, $row['cantidad'],1,0,'C');
    $pdf->Cell(25,5, $row['precio'],1,0,'C');
    $pdf->Cell(30,5, $row['descripcion'],1,0,'C');
  
 
 
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>