<?php
$user = $_SESSION['id'];
conecta($c);
if($c==null){
  echo ("Fallo de conexion");
}
else{
  mysqli_select_db($c, "db664165726");

  $sql="SELECT id FROM tareas WHERE id_usuario_tarea='7'";

  $resultado=mysqli_query($c, $sql);

  if($resultado){
    $filas=mysqli_num_rows($resultado);
    if($filas == 0){
      echo ("no tiene tareas");
    }
    else{

      while ($registro = mysqli_fetch_array($resultado)){
        echo "<option>";
        echo (int)$registro['id'];
        echo "</option>";
      }


    }
  }
  else{
    $error=mysqli_error($c);
    echo $error;
  }
  mysqli_close($c);
}


 ?>
