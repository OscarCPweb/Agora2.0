<?php

  conecta($c);

  if($c==null){
    echo ("Fallo de conexion");
  }
  else{
    mysqli_select_db($c, "db664165726");
    $id=$_SESSION['id'];
    $car;

    $sql="SELECT id, id_usuario, compania, producto, fecha, producto, nombre_cliente, numero_poliza, prima  FROM cartera WHERE id_usuario = $id ORDER BY fecha ASC";

    $resultado=mysqli_query($c, $sql);

    if($resultado){
      $filas=mysqli_num_rows($resultado);
      if($filas == 0){
        echo "No hay DATOS";
      }
      else{
        //el fetch pasa la informacion a $registro y avanza el puntero a la siguiente fila
        while ($registro = mysqli_fetch_array($resultado)){

          echo "<div class='marca'><p class='fecha__cartera'>".date("d-m-Y", strtotime($registro['fecha']))."</p>";
          echo "<strong>Nombre cliente</strong>: ".$registro['nombre_cliente']."<br/>";
          echo "<strong>Producto</strong>: ".$registro['producto']."<strong> Número de poliza: </strong>: ".$registro['numero_poliza']."<br/><strong> Compañia: </strong>: ".$registro['compania']."<strong> Prima: </strong>: ".$registro['prima']."€ <br/><hr/></div>";
          $car = $registro['id'];
          //echo "<a href='darBaja.php?var=$car'>Dar de baja</a><hr/>";

        }
          $_SESSION['id_cartera']=$registro['id'];
      }
    }
    else{
      $error=mysqli_error($c);
      echo $error;
    }

    mysqli_close($c);
  }



 ?>
