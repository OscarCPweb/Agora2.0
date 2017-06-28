




<?php
  setlocale(LC_ALL,"es_ES");

  if($c==null){
    echo ("Fallo de conexion");
  }
  else{
    mysqli_select_db($c, "db664165726");
    $realizada="Realizada";
    $cancelada="Cancelada";
    $incidencia="Incidencia";
    $pendiente ="Pendiente";

    $sql="SELECT id, hora, fecha, tarea, confirmacion, comentario FROM tareas WHERE id_usuario_tarea = '44' ORDER BY fecha DESC";

    $resultado=mysqli_query($c, $sql);

    if($resultado){
      $filas=mysqli_num_rows($resultado);
      if($filas == 0){
        echo ("no tiene tareas");
      }
      else{
        //el fetch pasa la informacion a $registro y avanza el puntero a la siguiente fila
        while ($registro = mysqli_fetch_array($resultado)){
        echo " <b>IDENTIFICADOR DE TAREA: <a href='#'' role='tab' data-toggle='tab'>".$registro['id']." </a></b>";
        echo "<p class='fecha__cartera'>".date("d-m-Y", strtotime($registro['fecha']))."</p>";


        if(strcmp($registro['confirmacion'], $realizada) == 0){
            echo "<div class='panel panel-success'><div class='panel-heading'>TAREA REALIZADA </div>";
        }
        elseif(strcmp($registro['confirmacion'], $cancelada) == 0){
            echo "<div class='panel panel-danger'><div class='panel-heading'>TAREA CANCELADA</div>";
        }
        elseif(strcmp($registro['confirmacion'], $pendiente) == 0){
            echo "<div class='panel panel-info'><div class='panel-heading'>TAREA Incidencia </div>";
        }
        else{
            echo "<div class='panel panel-warning'><div class='panel-heading'>TAREA AGENDADA </div>";
        }


          echo $registro['hora']."<br/>";
          echo $registro['tarea']."<br/>";
          echo "<b>Comentario:</b>".$registro ['comentario']."</div><br/>";
          $_SESSION['tarea']=$registro['id'];
          $tar=$registro['id'];

          //echo "<a href='borrarTarea.php?var=$tar'>Borrar</a>";
          echo "<hr/>";
        }
        echo "</form>";
      }
    }
    else{
      $error=mysqli_error($c);
      echo $error;
    }

    mysqli_close($c);
  }
 ?>
