
<?php
  setlocale(LC_ALL,"es_ES");

  if($c==null){
    echo ("Fallo de conexion");
  }
  else{
    mysqli_select_db($c, "db664165726");
    $realizada="Realizada";
    $cancelada="Visita Cancelada";
    $incidencia="Incidencia";
    $pendiente ="Pendiente";

    $sql="SELECT id, hora, fecha, tarea, confirmacion, comentario, tipo FROM tareas WHERE id_usuario_tarea = '$id' ORDER BY fecha DESC";

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
            echo "<div class='panel panel-success'><div class='panel-heading'>TAREA REALIZADA <br/> <b>Tipo: ".$registro['tipo']."</b></div>";
        }
        elseif(strcmp($registro['confirmacion'], $cancelada) == 0){
            echo "<div class='panel panel-danger'><div class='panel-heading'>TAREA CANCELADA <br/> <b>Tipo: ".$registro['tipo']."</b></div>";
        }
        elseif(strcmp($registro['confirmacion'], $pendiente) == 0){
            echo "<div class='panel panel-info'><div class='panel-heading'>TAREA PENDINETE <br/> <b>Tipo: ".$registro['tipo']."</b></div>";
        }
        else{
            echo "<div class='panel panel-warning'><div class='panel-heading'>TAREA PENDIENTE <br/> <b>Tipo: ".$registro['tipo']."</b></div>";
        }


          echo $registro['hora']."<br/>";
          echo $registro['tarea']."<br/>";
          echo "<b>Comentario: </b>".$registro ['comentario']."</div><br/>";
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
 <form action="../inc/menu/tareas/validar-tareas-comerciales.php" method="post">
   <select class="form-control" name="id">
       <?php
           include ("id_tarea.php")
        ?>
   </select>

   <select class="form-control" name="estado">
     <option value="Realizada">Vistia Realizada</option>
     <option value="Cancelada">Vistia Cancelada</option>
     <option value="Pendiente">Vistia Pendiente</option>
   </select>
   <select class="form-control" name="tipo">
     <option value="auto">AUTO</option>
     <option value="hogar">HOGAR</option>
     <option value="decesos">DECESOS</option>
     <option value="comercio">COMERCIO</option>
     <option value="comunidades">COMUNIDADES</option>
     <option value="otros-generales">OTROS GENERALES</option>
     <option value="ppi">PPI</option>
     <option value="pias">PIAS</option>
     <option value="ppitraspaso">TRASPASO PPI</option>
     <option value="ppa">PPA</option>
     <option value="ppa traspaso">TRASPASO PPA</option>
     <option value="inversion">INVERSION</option>
     <option value="ahorro">AHORRO</option>
     <option value="vida">VIDA</option>
     <option value="despacho">DESPACHO CON COMERCIALES</option>
     <option value="visitas">VISITAS CON COMERCIALES</option>

   </select>
   <textarea class="form-control" id="comentario" name="comentario" rows="7" placeholder="Pon que hiciste en la tarea"></textarea>
   <button tabindex="3" type="submit" class="btn btn-success" style="width:100%;">Enviar Tarea</button>
 </form>
