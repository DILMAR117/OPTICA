<?php
require_once("../bd/conexion.php");
$id_cli = $_POST['id_cli'];
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$dir= $_POST['dir'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$email= $_POST['email'];




  mysqli_query($link,"UPDATE clientes set nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno', dir='$dir', telefono='$telefono' , sexo='$sexo', email='$email' where id_cli='$id_cli'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='clientes.php';
                </script>";
?>

