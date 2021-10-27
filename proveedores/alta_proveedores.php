<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo= $_POST['correo'];
$empresa= $_POST['empresa'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO proveedor(nombre, direccion, telefono, correo, empresa) VALUES ('$nombre','$direccion','$telefono', '$correo',  '$empresa' )");
  echo "
   ?>
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='../paginas/proveedores.html';
                }
 </script>";

