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
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<br/>
<br/>
<div id="content">
<div class="logo">
				<h1><center>Proveedores</center></h1>
			</div>
<h2><center></center></h2>

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
			<h2 ><center> Registrar Proveedores</center></h2>
			<div class="col-md-6 offset-md-3">

			<div class="panel panel-primary">
			<!-- default panel contents -->
			<div class="panel-heading">Registrar Proveedores</div>
			<div class="panel-body">
			<!-- Inicia la tabla -->
			<table width="100%">
			<form action="alta_proveedores.php" method="post" id="alta_proveedores">
			<tr class="espacio"> 
			<td align="right"> <label for="nombre">Nombre:</label></td><td><input type="text" class="form-control" name="nombre" minlength="3" maxlength="20" id="nombre" placeholder="Ingrese el nombre" autofocus required pattern="[a-zA-Z]+" title="ingrese solo letras sin espacios "></td>
			</tr> 
			<tr class="espacio">
			<td align="right"> <label for="Direccion">Dirección:</label></td><td><input  type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese su dirección" required  ></td>
			</tr>
			<tr class="espacio">
			<td align="right"> <label for="Télefono">Télefono:</label></td><td><input maxlength="10" minlength="10" type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el número de télefono" required pattern="[0-9]{1,10}" title="Ingrese solo numeros maximo 10 digitos"></td>
			</tr>
			<tr class="espacio">
			<td align="right"> <label for="correo">Correo Electronico:</label></td><td><input  type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo electronico" required ></td>
			</tr>
			<tr class="espacio">
			</td>
			</tr>
			<td align="right"> <label for="empresa">Nombre de la Empresa:</label></td><td><input type="txt" class="form-control" name="empresa" id="empresa" placeholder="Nombre de la empresa"  required pattern="[a-zA-Z]+{1,20}" title="Ingrese solo letras porfavor"></td>
			</tr>
			</td>
			</tr>
			</tr>
            <td align="center" colspan="2"><input type="submit"  class="btn btn-outline-warning" value="Registrar"  title="Registrar"></td>
            </tr>
			</table>
			<!-- termina la tabla -->
			</div>
			</div>
			</div>
			<script>
        function abrirReporteProveedores(){
            window.open("../reporte_proveedores/index.php");
        }
    </script>
	
</body>

</html>
