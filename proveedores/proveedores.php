<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ÓPTICA_MIRAMOS POR TI</title>
    <link rel="icon" type="imaje/jpg" href="../img/login.jpg">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
	<link href="../css/estilos.css" rel="stylesheet">
 
 

</head>

<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
		<ul class="navbar-nav  sidebar">
	<img src="../img/logo.png" class="img-thumbnail" alt="...">
	</ul>
			
	</header>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<nav class="menu">
				<a href="../index.html">Inicio</a>
				<a href="registrar.php">Registrar</a>
				<a href="proveedores.php">Consultar</a>
				<a class="collapse-item" onClick='abrirReporteProveedores()'>Reporte</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
		<h1>Módulos</h1>
			<a href="../paginas/clientes.html">Clientes</a>
			<a href="../paginas/empleados.html">Empleados</a>
			<a href="../paginas/productos.html">Productos</a>
			<a href="../paginas/proveedores.html">Proveedores</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<br/>
<br/>
<div class="logo">
				<h1><center>Proveedores</center></h1>
			</div>
<header><center><h1></h1></center></header>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light  ">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>


	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

		<!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<li class="nav-item dropdown no-arrow d-sm-none">
			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-search fa-fw"></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
				aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small"
							placeholder="Search for..." aria-label="Search"
							aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>



		<div class="topbar-divider d-none d-sm-block"></div>


	</ul>
   
</nav>
<!-- End of Topbar -->

<!-- Begin Page Content -->

<br/>
<br/>
<br/>
<br/>
<center><h1>Consultar Proveedores</h1></center>

<table  class="table table-bordered" border="0" cellspacing="0">
<?php
require_once("../bd/conexion.php");

	$result = mysqli_query($link, "SELECT * FROM proveedor");
		echo "<table class='table table-striped'>";
		echo "<tr>
					  
									   
	<th class='success'>Nombre</th>
	<th class='success'>Dirección</th>
	<th class='success'>Télefono</th>
	<th class='success'>Correo</th>
	<th class='success'>Nombre de la empresa</th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'></th>
	<th class='success'>Modificar</th>
	<th class='success'>Eliminar</th>
									
</tr>";
	while  (($row = mysqli_fetch_array($result))!=NULL)
	{
		$codigo = $row['codigo'];
		$nombre = $row['nombre'];
		$direccion = $row['direccion'];
		$telefono = $row['telefono'];
		$correo = $row['correo'];
		$empresa = $row['empresa']; 



								
		echo "<tr>
		<td class='active'>$nombre</td>
		<td class='active'>$direccion</td>
		<td class='active'>$telefono</td>
		<td class='active'>$correo</td>
		<td class='active'>$empresa</td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		<td class='active'></td>
		
		


	  
		<td class='active align='center'><center><a href='modificar.php?codigo=$codigo'><button type='button' class='btn btn-danger'>Modificar</button></a></center></td>
		<td class='active' align='center'><a onClick='confirmar($codigo)'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>

		</tr>";    
	}
echo "</table>";
?>                                                                                                                              
</table> 

<script language="javascript"> 
    function confirmar(codigo){ 
    confirmar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (confirmar) 
    {
    document.location="eliminar_proveedores.php?opcion="+codigo;
    }
    else
	location.reload();  
    {
    } 
    }
    </script>
      <script>
        function abrirReporteProveedores(){
            window.open("../reporte_proveedores/index.php");
        }
    </script>
</body>

</html>
