<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <title>Herrero Brigantina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" href=" http://herrero-brigantina.es/wp-content/themes/theme-herrero/img/favicon/mstile-144x144.png" />

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
              <a href="archivos/campanas/resumenes/JURIDICO.xlsx"><i class='fa fa-calendar'></i> Campaña hasta hoy</a>
          </li>
          <li>
            <a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
          </li>
          <div class="" style="display:none;" id="myAlert">
            <h2>Total Herrero Brigantina DAS</h2>
             <div class="alert alert-success alert-dismissable" id="myAlert2">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               900,07 €
               <br/>
             </div>
           </div>

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
					<img class="avatar" src="../assets/img/CarlosA.jpg">
					<div class="from">
						<span>CARLOS ALVAREZ-HEVIA GONZALEZ</span>
            Responsable de Vida y Pensiones
					</div>
					<div class="date"><span class="fa fa-paper-clip"></span></div>
					<div class="menu"></div>
				</div>

				<div class="content">
          <?php
          include ("../inc/mysql.inc.php");
          conecta($c);
          include ("../inc/menu/tareas/campaña_patrimonio/tareas-no.php");
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

<script>
 function mostrarResumen(){
   if($("#myAlert").find("div#myAlert2").length==0){
     $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
   }
   $("#myAlert").css("display", "");
 }


</script>

</body>
</html>
