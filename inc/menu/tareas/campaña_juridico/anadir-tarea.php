<?php

  session_start();
  $id = '41';


  if( !isset($_POST['date']) || !isset($_POST['text'])  ){
    echo "Error, datos no introducidos correctamente";
  }
  elseif($_POST['date']=='' || $_POST['text']==''){
    echo "Error, datos no introducidos";
  }
  else{
    $date = $_POST['date'];
    $texto = $_POST['text'];
    $time = $_POST['time'];
    $name = $_POST['nombre'];
    $dire = $_POST['dire'];
    $phone = $_POST['telefono'];
    $text = "<b>Nombre:</b> ".$name."<br/><b>Direccion:</b>".$dire."<b>Telefono:</b>".$phone."<br/><b>Tarea:</b> ".$texto;

    include("../../../mysql.inc.php");
    conecta($c);

    if($c==null)
      echo "Fallo de conexion";
    else{
      mysqli_select_db($c,"db664165726");
      $sql="INSERT INTO tareas values (0,$id,'$date','$time','$text',' ',' ',' ',' ',' ',' ',' ')";
      $resultado=mysqli_query($c, $sql);
      if($resultado){
        $filas=mysqli_affected_rows($c);
        if($filas >0){
          header('Location:' . getenv('HTTP_REFERER'));
        }
        else{
          echo "errorr";
        }
      }

      else{
        # orden SQL incorrecta. Incluido el error Duplicate key
        $error=mysqli_error($c);
        echo $error;
      }
      mysqli_close($c);
    }

  }

 ?>
