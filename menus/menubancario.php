<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!--
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google!
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>Herrero Brigantina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
      .panel-body h4{
        font-size: 25px;
        text-align: center;
      }
    </style>

</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row inbox">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body inbox-menu">
        <img src="../assets/img/favicon.png" width="40%" alt="" style="margin: auto; display:block;">

        <h4>Herrero Brigantina</h4>
				<ul>
          <li>
            <a href='#' onclick ='mostrarResumen()'><i class='fa fa-inbox'></i> Total Generales HB <span class='label label-danger'>1</span></a>
          </li>
          <li>
            <a href='#myModal' data-toggle='modal'><i class='fa fa-calendar'></i> Campañas Mes Marzo </a>
          </li>
          <li>
            <a href='#cartera' data-toggle='modal'><i class='fa fa-calendar'></i> Campañas mes Abril</a>
          </li>
          <li>
            <a href='#cartera' data-toggle='modal'><i class='fa fa-calendar'></i> Campañas mes Mayo</a>
          </li>
          <li>
            <a href='../menus/empleados/empleados_comercial.php'><i class='fa fa-users'></i> Empleados</a>
          </li>
          <li>
            <a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
          </li>


					<li class="title">
						Estado de las Tareas
					</li>
					<li>
						<a href="#">Tarea Cancelada <span class="label label-danger"></span></a>
					</li>
					<li>
						<a href="#">Tarea Incidencia <span class="label label-info"></span></a>
					</li>
					<li>
						<a href="#">Tarea Completada <span class="label label-success"></span></a>
					</li>
					<li>
						<a href="#">Tarea Pendiente <span class="label label-warning"></span></a>
					</li>
				</ul>

			</div>

		</div>

		<div class="panel panel-default">

			<div class="panel-body contacts">

				<h6>Copyright Herrero Brigantina</h6>

			</div>

		</div>

	</div><!--/.col-->

	<div class="col-md-9">

		<div class="panel panel-default">

			<div class="panel-body message">
				<div class="header">
					<img class="avatar" src="../assets/img/MiguelA.jpg">
					<div class="from">
						<span>Miguel Ángel Barba </span>
            Responsable Bancario Herrero Brigantina
					</div>
					<div class="date"><span class="fa fa-paper-clip"></span></div>
					<div class="menu"></div>
				</div>

				<div class="content">
          <?php
          include ("../inc/mysql.inc.php");
          conecta($c);
          include ("../inc/menu/tareas/campaña_juridico/tareas-no.php");
           ?>


				</div>

				<form method="post" action="../inc/menu/tareas/campaña_patrimonio/anadir-tarea.php">
          <h5>Añadir Tarea</h5>
          <label for="date">Dia: </label><input class="form-control" type="date" name="date"/><br/>
          <label for="date">Hora: </label><input class="form-control" type="time" name="time"/><br/>
          <label for="nombre">Nombre: </label><input class="form-control" type="text" name="nombre" id="nombre"><br/>
          <label for="nombre">Direccion: </label><input class="form-control" type="text" name="dire" id="dire"><br/>
          <label for="nombre">Telefono: </label><input class="form-control" type="text" name="telefono" id="telefono"><br/>
          <label for="nombre">Tarea: </label>
					<div class="form-group">

						<textarea class="form-control" id="text" name="text" rows="12" placeholder="Enviar Tarea"></textarea>

					</div>

					<div class="form-group">

						<button tabindex="3" type="submit" class="btn btn-success">Enviar Tarea</button>

					</div>

				</form>

			</div>

		</div>

	</div><!--/.col-->




    <!-- Modal content-->
</div>


<!-- Modal -->
<div id="cartera" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cartera en vigor de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("cartera/cartera.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<div id="campañas" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <ul>
          <li>Campaña Generales<br/>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-danger'>PDF</span>
            </a>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-primary'>Perfil</span>
            </a>
          </li>
          <li>Campaña Patrimonial<br/>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-danger'>PDF</span>
            </a>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-primary'>Perfil</span>
            </a>
          </li>
          <li>Campaña Juridico<br/>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-danger'>PDF</span>
            </a>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-primary'>Perfil</span>
            </a>
          </li>
          <li>Campaña Bancario<br/>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-danger'>PDF</span>
            </a>
            <a href="archivos/campañas/generales.pdf">
              <span class='label label-primary'>Perfil</span>
            </a>
          </li>

        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>




</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
