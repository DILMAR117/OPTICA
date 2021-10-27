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
				<a href="empleados.php">Consultar</a>
        <a class="collapse-item" onClick='abrirReporteEmpleados()'>Reporte</a>
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
				<h1><center>Empleados</center></h1>
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
<h1 ><center> Modificar Empleados</center></h1>
               <?php
                      require_once("../bd/conexion.php");
                      $opcion = $_GET['codigo'];
                      $result=mysqli_query($link,"SELECT * FROM empleado where codigo='$opcion'");
                      $consulta = mysqli_fetch_array($result);
                ?>

            
               <div class="col-md-6 offset-md-3">

               <div class="panel panel-primary">
               <!-- default panel contents -->

              <div class="panel-heading">Modificar Empleados</div>
              <div class="panel-body">

             

              <!-- Inicia la tabla -->
              <table width="100%">
              <form action="modificar_empleados.php" method="post" id="frmmodificar_empleados" >
                <input type="hidden" class="form-control" name="codigo" id="codigo" value="<?php echo $consulta['codigo'];?>"
              <tr class="espacio"> 
              <td align="right"> <label for="nombre">Nombre:</label></td><td><input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $consulta['nombre'];?>" autofocus required pattern="[a-zA-Z]+" title="ingrese solo letras sin espacios"></td>
              </tr> 
              <tr class="espacio">
              <td align="right"> <label for="apellido_paterno">Apellido Paterno:</label></td><td><input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="<?php echo $consulta['apellido_paterno'];?>" autofocus required pattern="[a-zA-Z]+" title="ingrese solo letras sin espacios"></td>
              </tr> 
              <tr class="espacio">
              <td align="right"> <label for="apellido_materno">Apellido Materno:</label></td><td><input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="<?php echo $consulta['apellido_materno'];?>" autofocus required pattern="[a-zA-Z]+" title="ingrese solo letras sin espacios"></td>
              </tr>
              <tr class="espacio"> 
              <td align="right"><label for="Cargo">Cargo:</label></td><td><select  class="form-control" name="cargo" id="cargo" >
              <option value="<?php echo $consulta['cargo'];?>"><?php echo $consulta ['cargo'];?></option">
              <?php if ($consulta['cargo']== 'Gerente comercial')
              {
                 
                  echo"<option value='Gerente de ventas'>Gerente de ventas</option>";
              }
              else
              {
                echo"<option value='Gerente comercial'>Gerente comercial</option>";
              }
              ?>


              </select>
              <tr class="espacio"> 
              </td> 
              <td align="right"> <label for="Télefono">Télefono:</label></td><td><input maxlength="10" minlength="10" type="int" class="form-control" name="telefono" id="telefono"  value="<?php echo $consulta['telefono'];?>" required pattern="[0-9]{1,10}" title="Ingrese solo numeros maximo 10 digitos"></td>
              </tr>
              <tr class="espacio">
              <td align="right"><label for="Sexo">Sexo:</label></td><td><select  class="form-control" name="sexo" id="sexo" >
              <option value="<?php echo $consulta['sexo'];?>"><?php echo $consulta ['sexo'];?></option">
              <?php if ($consulta['sexo']== 'Masculino')
              {
                  echo"<option value='Femenino'>Femenino</option>";
              }
              else
              {
                echo"<option value='Masculino'>Masculino</option>";
              }
              ?>


              </select>
              </td>
              </tr>
              <td align="right"> <label for="Dirección">Dirección:</label></td><td><input type="txt" class="form-control" name="direccion" id="direccion"  value="<?php echo $consulta['direccion'];?>"  required></td>
              </tr>

              </select>
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
        function abrirReporteEmpleados(){
            window.open("../reporte_empleados/index.php");
        }
    </script>
</body>

</html>
