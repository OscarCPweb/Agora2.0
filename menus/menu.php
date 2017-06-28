<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Herrero Brigantina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/notify.css">
    <link rel="icon" type="image/png" href=" http://herrero-brigantina.es/wp-content/themes/theme-herrero/img/favicon/mstile-144x144.png" />
    <style>
      .panel-body h4{
        font-size: 25px;
        text-align: center;
      }
    </style>
    <script>
        Notify.Settings = {
            soundsOff: false,
            animDuration: {
                success: 12000,
                warning: 8000,
                error: 12000
            }
        };
    </script>
</head>
<body onload="Notify.Success('Es obligatorio planificar todos los días. A.G.O.R.A. esta cerrado el Jueves apartir de las 18:00'),Notify.Error('Se recuerda tambien poner el número de telefono de la visita'),Notify.Warning('Consejo: para ir al final de las tareas pulsar la tecla Fin del teclado.');",>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row inbox">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body inbox-menu">
        <img src="../assets/img/favicon.png" width="40%" alt="" style="margin: auto; display:block;">
        <h4>Herrero Brigantina</h4>
				<a href="../acceso/cerrar_session.php" class="btn btn-danger btn-block">Cerrar sesión</a>
				<ul>
          <?php include("../inc/menu/sidebar.php"); ?>
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

				<h6>Copyrigth Herrero Brigantina</h6>

			</div>

		</div>

	</div><!--/.col-->

	<div class="col-md-9">

		<div class="panel panel-default">

			<div class="panel-body message">
				<div class="header">
					<img class="avatar" src="../assets/img/<?php echo $_SESSION['image']; ?>">
					<div class="from">
						<span><?php echo $_SESSION['login']; ?></span>
            <?php echo $_SESSION['rango']; ?>
					</div>
					<div class="date"><span class="fa fa-paper-clip"></span></div>
					<div class="menu"></div>
				</div>
        <form method="post" action="../inc/menu/tareas/anadir-tarea.php">
          <h5>Añadir Tarea</h5>
          <label for="date">Dia: </label><input class="form-control" type="date" name="date"/><br/>
          <label for="date">Hora: </label><input class="form-control" type="time" name="time"/><br/>
          <label for="nombre">Nombre: </label><input class="form-control" type="text" name="nombre" id="nombre"><br/>
          <label for="nombre">Direccion: </label><input class="form-control" type="text" name="dire" id="dire"><br/>
          <label for="nombre">Telefono: </label><input class="form-control" type="text" name="telefono" id="telefono"><br/>
          <label for="nombre">Tarea: </label>
          <div class="form-group">
            <textarea class="form-control" id="text" name="text" rows="12" placeholder="Escribir tarea"></textarea>
          </div>

          <div class="form-group">

            <button tabindex="3" type="submit" class="btn btn-success">Enviar Tarea</button>

          </div>
        </form>
				<div class="content">
          <?php include ("empleados.php"); ?>
				</div>
			</div>

		</div>

	</div><!--/.col-->
    <!-- Modal content-->
    <?php
      if(($_SESSION['id']=='001' || ($_SESSION['nombre']=='002'))){ ?>
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Resumen Herrero Brigantina a fecha <?php
            setlocale(LC_ALL,"es_ES");
            echo strftime("%A %d de %B del %Y");
            ?></h4>
          </div>
          <div class="modal-body">
              <p><b>Total: 5.040.000 € / 1.764659,79 € <small>35,01%</small> </b></p>
              <p>Total con Ponderación:5.040.000 € / 1.909186,77 € <small>37,88%</small></p>
              <p><b>Generales: 820000 / 39924,69 €  <small>4,87 %</small></b></p>
              <p><b>Vida: 4.220000 / 1.724735,11 €  <small>40,87%</small></b></p>
              <hr/>
              <h5>Meses</h5>
              <h6>Enero: 420.000 / 312053,59 € <small>74.30 %</small></h6>
              <h6>Febero: 420.000 / 301441,44 € <small> 71.77 %</small> </h6>
              <h6 style="color: green;">Marzo: 420.000 / 484422.75 € <small>115.34 %</small></h6>
              <h5>Primer Trimestre: 87.14%</h5>
              <h6>Abril: 420.000 / 291021,51 <small>69,29 %</small></h6>
              <h6>Mayo: 420.000 / 375720,50 € <small>86 %</small></h6>
              <h6>Junio: </h6>
              <h6>Segundo Trimestre: </h6>

                <!-- GRAFICO -->
                <canvas id="resumen-gra" width="400" height="400"></canvas>
                <script>
                var ctx = document.getElementById("resumen-gra");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Enero", "Febero", "Marzo", "Abril", "Mayo", "Junio"],
                        datasets: [{
                            label: 'Resumen HB',
                            data: [312053.59, 301441.44, 484422.75, 291021.51, 375720.50, 0],
                            backgroundColor: [
                                'rgba(97, 247, 255, 1)'         ],
                            borderColor: [
                                'rgba(97, 247, 255)'
                            ],
                            borderWidth: 3
                        }]
                    },
                });
                </script>

              <p><b>Proyección: 4.370133,21 € - 86,71 %</b></p>
              <hr/>
              <p><b>Objetivo Margen: 210.000€ / -39056,08 €</b></p>
              <p>Gastos: 612635,60 € Ingresos: 573589,52€ - Proyeccion: -98721,35 - -46,06 %</p>
              <p><b>Crecimiento de cartera: 1.675866,78 € 250,30% </b></p>
              <p><b>Rescates:</b> 88793,01 €</p>
              <p>Proyeccion creccimiento de cartera <b>619,86 %<b/> Cartera hasta el 31/12/2016: 4.411029.42 € 15% de la cartera: 669.544,41€ Proyeccion: 4.150239,67 -</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="ranking" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ranking Herrero Brigantina <?php
        setlocale(LC_ALL,"es_ES");
        echo strftime("%A %d de %B del %Y");
        ?></h4>
      </div>
      <div class="modal-body">

        <canvas id="myChart" width="400" height="400"></canvas>
        <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Leon", "Ponferrada", "Galicia Norte", "Galicia Sur", "Asturias", "Madrid", "Cadiz"],
                datasets: [{
                    label: '€ Acumulados PPI 50%',
                    data: [251393.52, 205862.52, 278122.83, 272717.69, 334438.75, 352128.58, 115950.44],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 59, 164, 1)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 59, 164, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        </script>
        <canvas id="myChart2" width="400" height="400"></canvas>
        <script>
        var ctx = document.getElementById("myChart2");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Leon", "Ponferrada", "Galicia Norte", "Galicia Sur", "Asturias", "Madrid", "Cadiz"],
                datasets: [{
                    label: '€ Acumulados 100%',
                    data: [212264.69, 216518.22, 367354.49, 223967.69, 319479.95, 367166.43, 78450.44],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 59, 164, 1)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 59, 164, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        </script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <?php
      }

      else if($_SESSION['id']=='004'){
        include ('resumenes/comercial/resumen-comercial.php');
      }

    ?>
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
        <?php
        if (($_SESSION['nombre']=='001') || ($_SESSION['nombre']=='002')){
            include ("cartera/carterafull.php");
        }
        //Cartera subdireccion comercial

        elseif(($_SESSION['nombre']=='028') || ($_SESSION['nombre']=='005')){
            include ("cartera/cartera_subcomercial.php");
        }

        //cartera territoriales

        elseif(($_SESSION['nombre']=='004') || ($_SESSION['nombre']=='005') || ($_SESSION['nombre']=='006')){
            include ("cartera/carteraterritorial.php");
        }
        else{
            include ("cartera/cartera.php");
        }

        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="resumen" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Resumen de la oficina de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php
        if ($_SESSION['nombre']=='008'){
            echo "<h4>Despacha con Jorge Álvarez</h4>";
        }
        elseif ($_SESSION['nombre']=='010'){
            echo "<h4>Despacha con Jorge Álvarez</h4>";
        }
        elseif ($_SESSION['nombre']=='028'){
            echo "<h4>Despacha con Jorge Álvarez</h4>";
        }
        elseif ($_SESSION['nombre']=='029'){
            echo "<h4>Despacha con Jorge Álvarez</h4>";
        }
        elseif ($_SESSION['nombre']=='017'){
            echo "<h4>Despacha con Susana Trabajo </h4>";
        }
        elseif ($_SESSION['nombre']=='018'){
            echo "<h4>Despacha con Susana Trabajo </h4>";
        }




        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="misdocumentos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Documentos de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("documentos/docscomercial/comercial.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="misdocumentos004" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Documentos de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("documentos/docsterritorial/004.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="misdocumentos005" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Documentos de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("documentos/docsterritorial/005.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="misdocumentos006" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Documentos de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("documentos/docsterritorial/006.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="misdocumentos068" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Documentos de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("documentos/docsterritorial/julio.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<div id="misdocumentos028" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Documentos de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("documentos/docsterritorial/028.php") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->




  <div id="tareas-empleados" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tarea Empleados de <?php echo $_SESSION['login']; ?></h4>
      </div>
      <div class="modal-body">
        <?php include ("../inc/menu/tareas/empleados-oficina.php") ?>
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
        <h4 class="modal-title">Campañas en vigor Herrero Brigantina</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <ul>
          <li>Campaña Generales<br/>
            <a href="archivos/campanas/resumenes/GENERALES.xlsx">
              <span class='label label-danger'>Excel</span>
            </a>
            <a href="menugenerales.php">
              <span class='label label-primary'>Perfil</span>
            </a>
          </li>
          <li>Campaña Patrimonial<br/>
            <a href="archivos/campanas/resumenes/VIDA-AHORRO.xlsx">
              <span class='label label-danger'>Excel</span>
            </a>
            <a href="menupatrimonio.php">
              <span class='label label-primary'>Perfil</span>
            </a>
          </li>
          <li>Campaña Juridico<br/>
            <a href="archivos/campanas/resumenes/JURIDICO.xlsx">
              <span class='label label-danger'>Excel</span>
            </a>
            <a href="menujuridico.php">
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
var Notify;
(function (Notify)
{
    var _settings = {
        soundsOff: false,
        sounds: {
            success: '../assets/sounds/success,\ warning/1.mp3',
            warning: '../assets/sounds/success,\ warning/3.mp3',
            error: '../assets/sounds/errors/1.mp3'
        },
        animDuration: {
            success: 4000,
            warning: 4000,
            error: 4000
        }
    };
    Object.defineProperty(Notify, 'Settings', {
        get: function ()
        {
            return _settings;
        },
        set: function (settings)
        {
            _settings.sounds = settings["sounds"] || _settings.sounds;
            _settings.animDuration = settings["animDuration"] || _settings.animDuration;
            _settings.soundsOff = settings["soundsOff"] != undefined ? settings["soundsOff"] : _settings.soundsOff;
        }
    });

    //:::PUBLIC::://
    function Error(message, autoCloseDuration)
    {
        if (autoCloseDuration === void 0) { autoCloseDuration = _settings.animDuration.error; }
        Show('error', message, autoCloseDuration, ShowNotificationBar('error'));
    }
    Notify.Error = Error;
    function Success(message, autoCloseDuration)
    {
        if (autoCloseDuration === void 0) { autoCloseDuration = _settings.animDuration.success; }
        Show('success', message, autoCloseDuration, ShowNotificationBar('success'));
    }
    Notify.Success = Success;
    function Warning(message, autoCloseDuration)
    {
        if (autoCloseDuration === void 0) { autoCloseDuration = _settings.animDuration.warning; }
        Show('warning', message, autoCloseDuration, ShowNotificationBar('warning'));
    }
    Notify.Warning = Warning;

    function Close(notify)
    {
        notify.classList.remove('active');
        notify.classList.remove('success');
        notify.classList.remove('error');
        notify.addEventListener('transitionend', function (e)
        {
            var parent = e.currentTarget.parentNode;
            if (e.propertyName != 'bottom' || parent == null) return;
            setTimeout(function ()
            {
                var childs = parent.getElementsByClassName('component-notify').length;
                if (childs === 0)
                    parent.remove();
            }, 0);

            e.currentTarget.remove();
        });
    }
    Notify.Close = Close;
    //:::PRIVATE::://

    function ShowNotificationBar(notificationType)
    {
        var wrapp = document.createElement('div');
        wrapp.className = 'component-notify';

        var textContent = document.createElement('div');
        textContent.className = '--text';
        var btnClose = document.createElement('div');
        btnClose.className = '--button-close';
        btnClose.addEventListener('click', function (e)
        {
            e.stopPropagation();
            var component = e.target.closest('.component-notify');
            Close(component);
        })
        btnClose.innerHTML = '<span>&#10006;</span>';

        wrapp.appendChild(textContent);
        wrapp.appendChild(btnClose);

        var container = document.getElementById('notify-container');
        if (!container)
        {
            container = document.createElement('div');
            container.id = 'notify-container';
            document.body.appendChild(container);
        }
        if (!_settings.soundsOff)
        {
            var audio = document.createElement('audio'),
                soundSRC = _settings.sounds[notificationType];
            audio.autoplay = 'autoplay';
            audio.onended = function () { this.remove(); }
            audio.className = 'notify-sound';
            audio.innerHTML = '<source src="' + soundSRC + '" type="audio/mpeg" />' +
                              '<embed hidden="true" autostart="true" loop="false" src="' + soundSRC + '" />';

            container.appendChild(audio);
        }

        container.insertAdjacentElement("afterBegin", wrapp);
        return wrapp;
    }

    function Show(className, message, autoCloseDuration, notify)
    {
        message = message || "���������� �� ���������";
        var mainContainer = notify.closest('#notify-container'),
            textContainer = notify.getElementsByClassName('--text')[0];
        textContainer.textContent = message;
        setTimeout(function ()
        {
            notify.classList.add('active');
            notify.classList.add(className);
        }, 0)

        if (autoCloseDuration)
            setTimeout(function () { Notify.Close(notify); }, autoCloseDuration);
    }

})(Notify || (Notify = {}));
</script>
</body>
</html>
