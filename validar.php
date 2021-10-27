<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$link=mysqli_connect("localhost","root","","opticanew");

$consulta="SELECT*FROM login where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($link,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inicioPrincipal.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($link);
