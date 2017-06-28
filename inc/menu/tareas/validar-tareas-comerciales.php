<?php

  session_start();
  $id = $_SESSION['id'];
  (int)$num_tarea=$_POST['id'];
  $comentario=$_POST['comentario'];
  $confirmacion=$_POST['estado'];
  $tipo = $_POST['tipo'];


    include("../../../inc/mysql.inc.php");
    conecta($c);

    if($c==null)
      echo "Fallo de conexion";
    else{
      mysqli_select_db($c,"db664165726");
      $sql="UPDATE tareas SET comentario = '$comentario', confirmacion = '$confirmacion', tipo='$tipo' WHERE id = '$num_tarea' AND id_usuario_tarea = '$id'";
      $resultado=mysqli_query($c, $sql);
      if($resultado){
        $filas=mysqli_affected_rows($c);
        if($filas >0){
          header('Location:' . getenv('HTTP_REFERER'));
        }
        else{
          echo "errorrr";
        }
      }

      else{
        # orden SQL incorrecta. Incluido el error Duplicate key
        $error=mysqli_error($c);
        echo $error;
      }
      mysqli_close($c);
    }



 ?>
