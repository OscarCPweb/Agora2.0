<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Herrero Brigantina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="icon" type="image/png" href=" http://herrero-brigantina.es/wp-content/themes/theme-herrero/img/favicon/mstile-144x144.png" />
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
            <a href='#misdocumentos-crediticios' data-toggle='modal'><i class='fa fa-folder-open'></i> Mis Documentos</a>
          </li>
          <li>
            <a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
          </li>
          <li>
            <a href='#tpv-virtual' data-toggle="modal"><i class='fa fa-folder'></i> TPV </a>
          </li>
          <li>
            <a href='../menus/empleados/empleados_crediticios.php'><i class='fa fa-users'></i> Empleados</a>
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
						<span>MIGUEL ANGEL BARBA GALAN </span>
            Servicios Crediticios Herrero Brigantina
					</div>
					<div class="date"><span class="fa fa-paper-clip"></span></div>
					<div class="menu"></div>
				</div>

        <form method="post" action="../inc/menu/tareas/rrhh/anadir-tarea.php">
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

				<div class="content">
          <?php
          include ("../inc/mysql.inc.php");
          conecta($c);
          include ("../inc/menu/tareas/crediticios/tareas-no.php");
           ?>


				</div>
        <div id="tpv-virtual" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">TPV virtual servicios crediticios</h4>
              </div>
              <div class="modal-body">
                <form action="crediticios/ejemploGeneraPet.php" method="POST">
                  <div class="form-group">
                    <label for="importe">Importe: </label>
                    <input type="text" name="importe1" class="form-control" id="ex3" style="width:30%; display: inline-block">,
                    <input type="text" name='importe2' size="2" class="form-control" maxlength="2" id="ex2" style="width:10%; display: inline-block"> Euros<br/>
                  </div>
                  <div class="form-group">
                    <label for="poliza">Número de póliza:</label>
                    <input type="text " name="poliza" class="form-control"><br/>
                  </div>
                  <input type="submit" value="Enviar" class="btn btn-default">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>


			</div>

		</div>








	</div><!--/.col-->

  <div id="misdocumentos-crediticios" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Documentos de Crediticios</h4>
        </div>
        <div class="modal-body">
          <?php include ("documentos/crediticios/crediticios.php") ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>


    <!-- Modal content-->
</div>


</div>



<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
