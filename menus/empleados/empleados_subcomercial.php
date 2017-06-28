<style>
	img {
		width:50px;
		height: 50px;
	}
	div{
		width: 100%;
	}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php
	session_start();
	include ("../../inc/mysql.inc.php");
	conecta($c);
	$id_;
	$nombre;
	$zona=$_SESSION['zona'];




	if($c==null){
		echo ("Fallo de conexion");
	}
	else{
		mysqli_select_db($c, "db664165726");

		if($_SESSION['id']=='15'){
			$sql="SELECT nombre, password, id, rango, login, zona, oficina, descripcion,image, cartera  FROM usuarios WHERE jefe='director territorial1'";
		}
		else{
		    $sql="SELECT nombre, password, id, rango, login, zona, oficina, descripcion,image, cartera  FROM usuarios WHERE jefe='director territorial2'";
	}

		$resultado=mysqli_query($c, $sql);

		if($resultado){
			$filas=mysqli_num_rows($resultado);
			if($filas == 0){
				echo '<script type="text/javascript">window.location.href="../index.html";</script>';
			}

			else{
				//el fetch pasa la informacion a $registro y avanza el puntero a la siguiente fila
				echo "<div class='container'><div class='row'>";
				while ($registro = mysqli_fetch_array($resultado)){
					$nombre = $registro['nombre'];
					$_SESSION['zona']=$registro['zona'];
					$_SESSION['oficina']=$registro['oficina'];
					$_SESSION['nombre_']=$registro['nombre'];
					$_SESSION['usuario']=$registro['id'];
					$cadena="usuario=".$_SESSION['nombre_']."&zona=".$_SESSION['zona'];

					echo"
					<div class='col-md-4'>
					        <div class='well well-sm'>
					            <div class='media'>
					                <a class='thumbnail pull-left' href='#'>
					                    <img class='  img-rounded' src='../../assets/img/".$registro['image']."'>
					                </a>
					                <div class='media-body'>
					                    <h4 class='media-heading'>".$registro['login']."</h4><br/>
					                <p><span class='label label-info'>".$registro['rango']."</p><p></span> <span class='label label-primary'>".$registro['descripcion']."</span></p>
													<a href='../../acceso/login_trampa.php?$cadena' class='btn btn-danger btn-round'>Ver Perfil</a>
					                </div>
					            </div>
					        </div>
					    </div>
					";


					/*


					echo "<tr>";
					echo "<td>";
					$nombre = $registro['nombre'];
					echo $registro['login'];echo "</td>";echo "<td>";
					echo ":    <input type='text' value='$nombre' readonly/>";
					echo "</td>";
					$_SESSION['zona']=$registro['zona'];
					$_SESSION['oficina']=$registro['oficina'];
					$_SESSION['nombre_']=$registro['nombre'];
					$_SESSION['usuario']=$registro['id'];
					$_SESSIOM['rango']=$registro['rango'];
					$cadena="usuario=".$_SESSION['nombre_']."&zona=".$_SESSION['zona'];
					echo "<td>";
					echo "<a href='../acceso/login_trampa.php?$cadena'> Ver Perfil</a><br/></td>";
					echo "</tr>";
				}
				echo "</table>";
				*/
			}
				echo "</div></div>";
				$id_=$_SESSION['usuario'];
			}
		}
		else{
			$error=mysqli_error($c);
			echo $error;
		}
		mysqli_close($c);
	}
 ?>
