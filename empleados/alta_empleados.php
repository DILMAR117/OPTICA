<?php
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno= $_POST['apellido_materno'];
$cargo = $_POST['cargo'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$direccion= $_POST['direccion'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO empleado(nombre, apellido_paterno, apellido_materno, cargo, telefono, sexo, direccion) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$cargo','$telefono', '$sexo',  '$direccion' )");
  echo "
   ?>
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='../paginas/empleados.html';
                }
 </script>";

