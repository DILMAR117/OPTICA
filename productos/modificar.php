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
				<a href="productos.php">Consultar</a>
        <a class="collapse-item" onClick='abrirReporteProductos()'>Reporte</a>
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
				<h1><center>Productos</center></h1>
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
<h1><center> Modificar Productos</center></h1>
               <?php
                      require_once("../bd/conexion.php");
                      $opcion = $_GET['codigo'];
                      $result=mysqli_query($link,"SELECT * FROM productos where idpro='$opcion'");
                      $consulta = mysqli_fetch_array($result);
                ?>

            
               <div class="col-md-6 offset-md-3">

               <div class="panel panel-primary">
               <!-- default panel contents -->

              <div class="panel-heading">Modificar Productos</div>
              <div class="panel-body">
                

              <!-- Inicia la tabla -->
              <table width="100%">
              <form action="modificar_productos.php" method="post" id="frmmodificar_productos" >
              <input type="hidden" class="form-control" name="idpro" id="idpro" value="<?php echo $consulta['idpro'];?>"
              <tr class="espacio"> 
              <td align="right"> <label for="Codigo">Codigo:</label></td><td><input type="int" class="form-control" name="codigo" id="codigo" value="<?php echo $consulta['codigo'];?>" autofocus required pattern="[0-9]+" title="ingrese solo números"></td>
              </tr> 
              <tr class="espacio"> 
              <td align="right"><label for="Tipo">Tipo de Lentes:</label></td><td><select  class="form-control" name="tipo" id="tipo" >
              <option value="<?php echo $consulta['tipo'];?>"><?php echo $consulta ['tipo'];?></option">
              <?php if ($consulta['tipo']== 'Contacto')
              {
                 
                  echo"<option value='Solares'>Solares</option>";
                  echo"<option value='Oftalmicos'>Oftalmicos</option>";

              }
              else if ($consulta['tipo']== 'Solares')
              {
                  echo"<option value='Contacto'>Contacto</option>";
                  echo"<option value='Oftalmicos'>Oftalmicos</option>";
              }
              else if ($consulta['tipo']== 'Oftalmicos')
              {
                  echo"<option value='Solares'>Solares</option>";
                  echo"<option value='Contacto'>Contacto</option>";
              }
          
          
              ?>


              </select>
              <tr class="espacio"> 
              <td align="right"><label for="Tipo_Armazon">Tipo de Armazon:</label></td><td><select  class="form-control" name="tipo_armazon" id="tipo_armazon" >
              <option value="<?php echo $consulta['tipo_armazon'];?>"><?php echo $consulta ['tipo_armazon'];?></option">
              <?php if ($consulta['tipo_armazon']== 'Armazon de plastico')
              {
                 
                  echo"<option value='Armazon metalico'>Armazon metalico</option>";
              }
              else
              {
                echo"<option value='Armazon de plastico'>Armazon de plastico</option>";
              }
              ?>


              </select>
              <tr class="espacio"> 
              </td> 
              <td align="right"> <label for="Cantidad">Cantidad:</label></td><td><input  type="int" class="form-control" name="cantidad" id="cantidad"  value="<?php echo $consulta['cantidad'];?>" required pattern="[0-9]+" title="Ingrese solo numeros"></td>
              </tr>
             
              <tr class="espacio"> 
              </td> 
              <td align="right"> <label for="Precio">Precio Unitario:</label></td><td><input type="number" step="0.1" class="form-control" name="precio" id="precio"  value="<?php echo $consulta['precio'];?>" required pattern="[0-9]+" title="$Precio"></td>
              </tr>
              <tr class="espacio">
              </td>
              </tr>
              <td align="right"> <label for="Descripcion">Descripción:</label></td><td><input type="txt" class="form-control" name="descripcion" id="descripcion"  value="<?php echo $consulta['descripcion'];?>"  required></td>
              </tr>
              </td>
              </tr>
            </tr>




             <tr>
            <td align="center" colspan="2"><input type="submit"  class="btn btn-outline-warning" value="Modificar"  title="Modificar"></td>
            </tr>

            </table>
            <!-- termina la tabla -->
            </div>
            </div>
            </div>

            <script>
        function abrirReporteProductos(){
            window.open("../reporte_productos/index.php");
        }
    </script>
</body>

</html>
