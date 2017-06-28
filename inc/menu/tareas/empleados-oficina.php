
<?php
  conecta($c);
  //$oficina=$_SESSION['oficina'];
  $nombre = $_SESSION['nombre'];
  $id=$_SESSION['id'];
  $realizada="Realizada";
  $cancelada="Visita Cancelada";
  $incidencia="Incidencia";
  $pendiente ="Pendiente";
  $ofi='';

    if($id == 17){
      $ofi = 'galicia norte';
    }
    elseif ($id == 39){
      $ofi = "galicia sur";
    }
    elseif ($id == 28){
      $ofi = "madrid2";
    }

    elseif ($id == 27){
      $ofi = "madrid";
    }

    elseif ($id == 20){
      $ofi = "ponferrada";
    }

    elseif($id == 21){
      $ofi = "leon";
    }
    elseif ($id == 38){
      $ofi ='asturias';
    }
    elseif ($id == 15){
      $ofi ='cadiz';
    }
  if($c==null){
    echo ("Fallo de conexion");
  }
  else{
    mysqli_select_db($c, "db664165726");



    $sql="SELECT id, hora, fecha, tarea, confirmacion, comentario, id_usuario_tarea
   FROM tareas WHERE id_usuario_tarea IN (SELECT id FROM usuarios WHERE oficina='$ofi' AND (rango='inspector' OR rango='subdirector' OR rango='inspector' OR rango='coordinador')) ORDER BY fecha ASC";


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
              echo "<h4 style='color: green; text-transform: uppercase;'>".$registro['confirmacion']."</h4><div style='background-color: rgba(14, 255, 0, 0.3) ';>";
        }
        elseif(strcmp($registro['confirmacion'], $cancelada) == 0){
            echo "<h4 style='color: red;text-transform: uppercase;'>".$registro['confirmacion']."</h4><div style='background-color:  rgba(255, 18, 0, 0.4) ';>";

        }
        elseif(strcmp($registro['confirmacion'], $pendiente) == 0){
            echo "<h4 style='color: pink;text-transform: uppercase;'>".$registro['confirmacion']."</h4> <div style='background-color: rgba(255, 171, 155, 0.5) ';>";
        }
        else{
            echo "<h4 style='color: ORANGE;text-transform: uppercase;'>".$registro['confirmacion']."</h4> <div style='background-color:  rgba(255, 108, 0, 0.4) ';>";
        }



          /*

          PONER EL NOMBRE DEL LOS EMPLADOS PARA EL DIRECTOR DE OFICINA

          */
          if($registro ['id_usuario_tarea']=='33'){
            echo "<b>Benjamin</b> <br/>";
          }

          else if($registro ['id_usuario_tarea']=='40'){
            echo "<b>Miguel Ares</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='22'){
            echo "<b>Mercedes</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='23'){
            echo "<b>Rosa</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='25'){
            echo "<b>Javier</b>";
            echo "<br/>";
          }

          else if($registro ['id_usuario_tarea']=='26'){
            echo "<b>Maria del Carmen</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='27'){
            echo "<b>Antonio</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='28'){
            echo "<b>Alvaro</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='30'){
            echo "<b>Demetrio</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='31'){
            echo "<b>Juan Carlos</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='32'){
            echo "<b>Lidia</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='34'){
            echo "<b>Zara</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='37'){
            echo "<b>Manuel Jesus</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='39'){
            echo "<b>Samuel</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='55'){
            echo "<b>Sonia</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='56'){
            echo "<b>Eugenio</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='58'){
            echo "<b>Daniel</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='62'){
            echo "<b>Elisabeth</b>";
            echo "<br/>";
          }
          else if($registro ['id_usuario_tarea']=='65'){
            echo "<b>Jose Maria</b>";
            echo "<br/>";
          }


          echo $registro['hora']."<br/>";
          echo $registro['tarea']."<br/>";
          echo "<b>Comentario de la tarea: </b>".$registro['comentario']."</div>";
          $_SESSION['tarea']=$registro['id'];
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
