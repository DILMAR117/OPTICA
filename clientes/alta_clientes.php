<?php
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno= $_POST['apellido_materno'];
$dir = $_POST['dir'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];


  require_once ("../bd/conexion.php");
  mysqli_query($link, "INSERT INTO clientes(nombre, apellido_paterno, apellido_materno, dir, telefono, sexo, email) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$dir','$telefono', '$sexo',  '$email' )");
  echo "
   ?>
 
<script>
    if(confirm(\"¿Desea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='../paginas/clientes.html';
                }
 </script>";

