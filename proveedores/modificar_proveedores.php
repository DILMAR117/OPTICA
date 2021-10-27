<?php
require_once("../bd/conexion.php");
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$direccion= $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$empresa= $_POST['empresa'];




  mysqli_query($link,"UPDATE proveedor set nombre='$nombre', direccion='$direccion', telefono='$telefono' , correo='$correo', empresa='$empresa' where codigo='$codigo'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='proveedores.php';
                </script>";
?>

