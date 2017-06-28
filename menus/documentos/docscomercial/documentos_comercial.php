<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../../../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../../../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mis documentos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../../../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
		<link rel="stylesheet" href="../../../assets/css/jquery.mCustomScrollbar.min.css" />


</head>

<body>
	<?php


	session_start();
	$nombre = $_SESSION['nombre'];
	$id = $_SESSION['id'];

 ?>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
			<div class="logo">
				<a href="http://www.herrero-brigantina.com" class="simple-text">
					Herrero Brigantina
				</a>
			</div>

			<div class="sidebar-wrapper">
			      <ul class="nav">
			          <li >
			              <a href="javascript:history.go(-1);">
			                  <i class="material-icons">dashboard</i>
			                  <p>Menu Principal</p>
			              </a>
			          </li>
			          <li>
			              <a href="../../../acceso/cerrar_session.php">
			                  <i class="material-icons">person</i>
			                  <p>Cerrar sesión</p>
			              </a>
			          </li>
			          <li>
			              <a href="../../../empleados/empleados_for_director_territorial.php">
			                  <i class="material-icons">group</i>
			                  <p>Empleados</p>
			              </a>
			          </li>
                <li class="active">
                    <a href="../menu/misdocumentos/documentos_comercial/documentos_comercial.php">
                        <i class="material-icons">shopping_cart</i>
                        <p>Mis Documentos</p>
                    </a>
                </li>
								<li>
										<a href="../../../menu/menu-General/comisiones.php">
												<i class="material-icons">shopping_cart</i>
												<p>Comisiones</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu-General/remuneracion.php">
												<i class="material-icons">card_membership</i>
												<p>Remuneración</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu-General/cartera-vigor.php">
												<i class="material-icons">euro_symbol</i>
												<p>Cartera en vigor</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu-General/informe-consecucion.php">
												<i class="material-icons">chrome_reader_mode</i>
												<p>informe de consecución</p>
										</a>
								</li>
								<li >
										<a href="../../../menu/menu-General/ranking.php">
												<i class="material-icons">person_add</i>
												<p>Ranking</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu-General/cuadro_mando_territorial.php">
												<i class="material-icons">person_add</i>
												<p>Cuadro de mando</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu-General/resumen.php">
												<i class="material-icons">person_add</i>
												<p>Resumen</p>
										</a>
								</li>
								<li>
										<a href="../../../src/resumen.xlsx">
												<i class="material-icons">person_add</i>
												<p>Excel</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu_campanya.php">
												<i class="material-icons">person_add</i>
												<p>Campañas Generales</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu_campanya_vida.php">
												<i class="material-icons">person_add</i>
												<p>Campañas Vida</p>
										</a>
								</li>
								<li>
										<a href="../../../menu/menu_campanya_inversion.php">
												<i class="material-icons">person_add</i>
												<p>Campañas Inversion</p>
										</a>
								</li>



			      </ul>
			</div>
	    </div>
	    <div class="main-panel">
				<nav class="navbar navbar-transparent navbar-absolute">
  				<div class="container-fluid">
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle" data-toggle="collapse">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  						</button>
  					</div>
  					<div class="collapse navbar-collapse">
  						<ul class="nav navbar-nav navbar-right">
  						</ul>
  					</div>
  				</div>
  			</nav>
<!-- CHART JS -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="red">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title"><h4>Mis Documentos </h4></span>
											<ul class="nav nav-tabs" data-tabs="tabs">
											</ul>
										</div>

									</div>

								</div>

                <br/><br/><br/><br/>

                <div style="margin: auto; width:50%">

                <form action="subirArchivo.php" method="post" enctype="multipart/form-data">
                  <input name="archivo" type="file" />

          				<input type="text" name="titulo"  placeholder="Poner titulo al archvo" />
          				<input type="submit" value="Guardar"/>
          			</form>



                <?php
/*
                $path = "comercial/";
                $files = scandir($path);
                foreach ($files as &$value) {
                    echo "<a href='comercial/".$value."' target='_black' >".$value."</a><br/>";
                }
*/


              $dir_path = "comercial/";

              if (is_dir($dir_path)) {
                  if ($dir_handler = opendir($dir_path)) {
                      while (($file = readdir($dir_handler)) !== false) {
                          echo "<a href='comercial/$file'/> $file <br/> </a>";
                      }
                      closedir($dir_handler);
                  }
              }

                 ?>


						<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
						<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
						<script src="../../../assets/js/ranking3.js"></script>
            <script src="../../../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
            <script src="../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../../../assets/js/material.min.js" type="text/javascript"></script>
						<script src="../../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

            <!--  Charts Plugin -->
            <script src="../../../assets/js/chartist.min.js"></script>

            <!--  Notifications Plugin    -->
            <script src="../../../assets/js/bootstrap-notify.js"></script>

            <!--  Google Maps Plugin    -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

            <!-- Material Dashboard javascript methods -->
            <script src="../../../assets/js/material-dashboard.js"></script>

            <!-- Material Dashboard DEMO methods, don't include it in your project! -->
            <script src="../../../assets/js/demo.js"></script>

            </html>
