<?php
require_once("../bd/conexion.php");
$idpro = $_POST['idpro'];
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$tipo_armazon = $_POST['tipo_armazon'];
$cantidad = $_POST['cantidad'];
$precio= $_POST['precio'];
$descripcion = $_POST['descripcion'];


  mysqli_query($link,"UPDATE productos set codigo='$codigo', tipo='$tipo', tipo_armazon='$tipo_armazon', cantidad='$cantidad', precio='$precio' , descripcion='$descripcion' where idpro='$idpro'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='productos.php';
                </script>";
?>

