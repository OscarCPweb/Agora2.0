<?php

  conecta($c);

  if($c==null){
    echo ("Fallo de conexion");
  }
  else{
    mysqli_select_db($c, "db664165726");
    $id=$_SESSION['id'];
    $car;

    $sql="SELECT id, id_usuario, compania, producto, fecha, producto, nombre_cliente, numero_poliza, prima  FROM cartera ORDER BY fecha ASC";

    $resultado=mysqli_query($c, $sql);
    $carte = '';
    if($resultado){
      $filas=mysqli_num_rows($resultado);
      if($filas == 0){
        echo "No hay DATOS";
      }
      else{
        //el fetch pasa la informacion a $registro y avanza el puntero a la siguiente fila
        while ($registro = mysqli_fetch_array($resultado)){
          if($registro ['id_usuario']=='33'){
            echo "<b>Benjamin</b> <br/>";
          }

          else if($registro ['id_usuario']=='40'){
            $carte="<b>Miguel Ares</b>";
          }
          else if($registro ['id_usuario']=='22'){
            $carte= "<b>Mercedes</b>";

          }
          else if($registro ['id_usuario']=='23'){
            $carte= "<b>Rosa</b>";

          }
          else if($registro ['id_usuario']=='25'){
            $carte= "<b>Javier</b>";

          }

          else if($registro ['id_usuario']=='26'){
            $carte= "<b>Maria del Carmen</b>";

          }
          else if($registro ['id_usuario']=='27'){
            $carte= "<b>Antonio</b>";

          }
          else if($registro ['id_usuario']=='28'){
            $carte= "<b>Alvaro</b>";

          }
          else if($registro ['id_usuario']=='30'){
            $carte= "<b>Demetrio</b>";

          }
          else if($registro ['id_usuario']=='31'){
            $carte= "<b>Juan Carlos</b>";

          }
          else if($registro ['id_usuario']=='32'){
            $carte= "<b>Lidia</b>";

          }
          else if($registro ['id_usuario']=='34'){
            $carte= "<b>Zara</b>";

          }
          else if($registro ['id_usuario']=='37'){
            $carte= "<b>Manuel Jesus</b>";

          }
          else if($registro ['id_usuario']=='39'){
            $carte= "<b>Samuel</b>";

          }
          else if($registro ['id_usuario']=='55'){
            $carte= "<b>Sonia</b>";

          }
          else if($registro ['id_usuario']=='56'){
            $carte= "<b>Eugenio</b>";

          }
          else if($registro ['id_usuario']=='58'){
            $carte= "<b>Daniel</b>";

          }
          else if($registro ['id_usuario']=='62'){
            $carte= "<b>Elisabeth</b>";

          }
          else if($registro ['id_usuario']=='65'){
            $carte= "<b>Jose Maria</b>";

          }



          echo "<strong>Nombre Empleado</strong>: ".$carte;
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
