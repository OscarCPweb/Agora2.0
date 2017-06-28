<?php

  conecta($c);
  $oficina=$_SESSION['oficina'];
  $zona=$_SESSION['zona'];

  if($c==null){
    echo ("Fallo de conexion");
  }
  else{
    mysqli_select_db($c, "db664165726");
    $id=$_SESSION['id'];
    $car;

	if($_SESSION['id']=='38'){
        $sql="SELECT cartera.id, cartera.id_usuario, cartera.compania, cartera.producto, cartera.fecha,
        cartera.producto, cartera.nombre_cliente, cartera.numero_poliza, cartera.prima, usuarios.login
        FROM cartera INNER JOIN usuarios ON cartera.id_usuario = usuarios.id
        WHERE id_usuario IN (SELECT id from usuarios where zona='leon/asturias' AND zona='galicia' ) ORDER BY fecha ASC";
    }
    else{
         $sql="SELECT cartera.id, cartera.id_usuario, cartera.compania, cartera.producto, cartera.fecha,
        cartera.producto, cartera.nombre_cliente, cartera.numero_poliza, cartera.prima, usuarios.login
        FROM cartera INNER JOIN usuarios ON cartera.id_usuario = usuarios.id
        WHERE id_usuario IN (SELECT id from usuarios where zona='centro' AND zona='andalucia' AND zona='tenerife' ) ORDER BY fecha ASC";
    }

    $resultado=mysqli_query($c, $sql);

    if($resultado){
      $filas=mysqli_num_rows($resultado);
      if($filas == 0){
        echo "No hay DATOS";
      }
      else{
        //el fetch pasa la informacion a $registro y avanza el puntero a la siguiente fila
        while ($registro = mysqli_fetch_array($resultado)){
          echo "<b>".$registro['login'].":&nbsp;</b>";
          echo "<p class='fecha__cartera'>".date("d-m-Y", strtotime($registro['fecha']))."</p>";
          echo "<strong>Nombre cliente</strong>: ".$registro['nombre_cliente']."<br/>";
          echo "<strong>Producto</strong>: ".$registro['producto']."<strong> Número de poliza: </strong>: ".$registro['numero_poliza']."<br/><strong> Compañia: </strong>: ".$registro['compania']."<strong> Prima: </strong>: ".$registro['prima']."€ <br/><hr/>";
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
