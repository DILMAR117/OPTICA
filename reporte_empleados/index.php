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
$pdf->Cell(0,5,'EMPLEADOS REGISTRADOS ',0,1,'C');


  $pdf->Ln();

  
 
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

$result=mysqli_query($link, "select nombre,apellido_paterno,apellido_materno,cargo,telefono,sexo,direccion from empleado"); 

  
//$result = mysql_query($consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(20,5, "Nombre",1,0,'C');
    $pdf->Cell(20,5, "Apellido paterno",1,0,'C');
    $pdf->Cell(20,5, "Apellido Materno",1,0,'C');
    $pdf->Cell(30,5, "Cargo",1,0,'C');
    $pdf->Cell(20,5, "Telefono",1,0,'C');
    $pdf->Cell(20,5, "Sexo",1,0,'C');
    $pdf->Cell(50,5, "Direccion",1,0,'C');
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
   
    $pdf->Cell(20,5, $row['nombre'],1,0,'C');
    $pdf->Cell(20,5, $row['apellido_paterno'],1,0,'C');
    $pdf->Cell(20,5, $row['apellido_materno'],1,0,'C');
    $pdf->Cell(30,5, $row['cargo'],1,0,'C');
    $pdf->Cell(20,5, $row['telefono'],1,0,'C');
    $pdf->Cell(20,5, $row['sexo'],1,0,'C');
    $pdf->Cell(50,5, $row['direccion'],1,0,'C');
 
 
    //$exec=mysql_query($consulta); 


  
  }  

  mysqli_close($link);
$pdf->Output();
?>