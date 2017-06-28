<?php

	include ("../inc/mysql.inc.php");
	conecta($c);
	$oficina= $_SESSION['oficina'];
	$id_;
	$nombre;

	if($c==null){
		echo ("Fallo de conexion");
	}
	else{
		mysqli_select_db($c, "db664165726");

$sql="SELECT nombre, password, id,login,zona,oficina,rango,image, cartera, descripcion, zona  FROM usuarios  WHERE id='$id' ";

		$resultado=mysqli_query($c, $sql);

		if($resultado){
			$filas=mysqli_num_rows($resultado);
			if($filas == 0){
				echo '<script type="text/javascript">window.location.href="../index.html";</script>';
			}

			else{
				//el fetch pasa la informacion a $registro y avanza el puntero a la siguiente fila
				while ($registro = mysqli_fetch_array($resultado)){
					$nombre = $registro['nombre'];
					$_SESSION['zona']=$registro['zona'];
					$_SESSION['oficina']=$registro['oficina'];
					$_SESSION['nombre_']=$registro['nombre'];
					$_SESSION['usuario']=$registro['id'];


					$cadena="usuario=".$_SESSION['nombre_']."&zona=".$_SESSION['zona'];

					echo"
					<div class='col-md-12' >
					    <div class='card card-profile' stlye='padding: 5px;'>
					      <div class='card-avatar'>
					        <a href='#pablo'>
					          <img class='img' src='../assets/img/".$registro['image']."' />
					        </a>
					      </div>


					      <div class='content'>
					        <h4 class='card-title'>".$registro['login']."</h4>
					        <p class='card-content'>
									".$registro['descripcion']."
					        </p>
					      </div>
					    </div>
					  </div>
					";

				}
				$id_=$_SESSION['usuario'];


			}

		echo "</form>";
		}
		else{
			$error=mysqli_error($c);
			echo $error;
		}

		mysqli_close($c);
	}
 ?>
