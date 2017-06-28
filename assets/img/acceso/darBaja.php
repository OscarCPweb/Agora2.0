<?php
  session_start();

 $id_cartera=$_GET['var'];



     include("../inc/mysql.inc.php");
      conecta($c);

      if($c==null)
        echo "Fallo de conexion";
      else{
        mysqli_select_db($c,"db664165726");
        $sql="DELETE FROM CARTERA where id = $id_cartera";
        $resultado=mysqli_query($c, $sql);
        if($resultado){
          $filas=mysqli_affected_rows($c);
          if($filas >0){
          	echo '<script language="javascript">alert("Borrado Correctamente");
					window.location.href="../prueba_edit.php";
				  </script>';

          }
          else{
            echo '<script type="text/javascript">window.location.href="../index.html";</script>';
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
