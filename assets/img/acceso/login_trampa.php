
<?php

		session_start();

		$usuario=($_GET['usuario']);
		$_SESSION['nombre']=$usuario;
		$zona=($_GET['zona']);
		setcookie("zona", $zona);
		$rango=$_SESSION['rango'];


		# incluyo el fichero de conexion
		include("../inc/mysql.inc.php");

		# me conecto a MySQL Server
		conecta($c);

		if($c==null)
			echo "<h1>Error base de la base de datos</h1>";
		else{
			mysqli_select_db($c,"db664165726");

			# creo la orden SQL
			$sql="SELECT nombre,id, rango, zona, oficina, cartera FROM usuarios WHERE nombre = '$usuario' OR cartera='$cartera'";
			# ejecuto la orden SQL
			$resultado=mysqli_query($c, $sql);

			if($resultado){
				# nos devuelve cuantas filas contiene $reslultado
				$filas=mysqli_num_rows($resultado);

				if($filas == 0){
					echo "errorLogin";
					//echo '<script type="text/javascript">window.location.href="../index.html";</script>';
				}
				else{
					session_start();
					while ($registro = mysqli_fetch_array($resultado)){

						$_SESSION['zona']=$registros['zona'];
						$_SESSION['nombre']=$registro['nombre'];
						$_SESSION['id']=$registro['id'];
						$_SESSION['zona']=$registro['zona'];
						$_SESSION['oficina']=$registro['oficina'];
						$_SESSION['cartera']=$registro['cartera'];
						$rango = $registro['rango'];

					}
					if($rango == 'director territorial'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_territorial.php";</script>';

					}
					elseif($rango == 'inspector' || $rango == 'inspectorx'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_inspector.php";</script>';

					}
					elseif($rango == 'director territorialx'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_territorial.php";</script>';

					}
					elseif($rango == 'director oficina'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_director_oficina.php";</script>';

					}
					elseif($rango == 'director comercial'){
						echo '<script type="text/javascript">window.location.href=" ../menu/menu_comercial.php";</script>';

					}
					elseif($rango == 'campanya_vida'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_campanya_vida.php";</script>';

					}
					elseif($rango == 'campanya_generales'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_campanya.php";</script>';

					}
					elseif($rango == 'campanya_inversion'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_campanya_inversion.php";</script>';

					}
					elseif($rango == 'subdirector'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_subdirector.php";</script>';

					}
					elseif($rango == 'rrhh'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_rrhh.php";</script>';

					}
					elseif($rango == 'director juridico'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_juridico.php";</script>';

					}
					elseif($rango == 'gestion'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_gestion.php";</script>';

					}
					elseif($rango == 'tecnico'){
						echo '<script type="text/javascript">window.location.href="../menu/menu_tecnico.php";</script>';

					}
					else{
						echo '<script type="text/javascript">window.location.href="../menu/menu.php";</script>';

					}
				}
			}
			else{
				# orden SQL incorrecta. Incluido el error Duplicate key
				$error=mysqli_error($c);
				echo $error;
			}

			mysqli_close($c);
		}
//	}
?>
