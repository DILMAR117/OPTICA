<?php
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$tipo_armazon= $_POST['tipo_armazon'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];



  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO productos(codigo, tipo, tipo_armazon, cantidad, precio, descripcion) VALUES ('$codigo', '$tipo', '$tipo_armazon', '$cantidad','$precio', '$descripcion' )");
  echo "
   ?>
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='../paginas/productos.html';
                }
 </script>";

