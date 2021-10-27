<?php
require_once("../bd/conexion.php");
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$cargo= $_POST['cargo'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$direccion= $_POST['direccion'];




  mysqli_query($link,"UPDATE empleado set nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', cargo='$cargo', telefono='$telefono' , sexo='$sexo', direccion='$direccion' where codigo='$codigo'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='empleados.php';
                </script>";
?>

