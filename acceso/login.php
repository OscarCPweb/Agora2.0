
<?php


	if( !isset($_POST['usuario'])  || !isset($_POST['pass'])  ){
		header("Location: ../index.html");
	}
	elseif($_POST['usuario']=='' || $_POST['pass']==''){
	header("Location: ../index.html");
	}
	else{

		$usuario= ($_POST['usuario']);
		$pass=  ($_POST['pass']);
		$rango;

		# incluyo el fichero de conexion
		include("../inc/mysql.inc.php");

		# me conecto a MySQL Server
		conecta($c);

		if($c==null)
			echo "<h1>Error BASE DE DATOS!</h1>";
		else{
			mysqli_select_db($c,"db664165726");

			# creo la orden SQL
			$sql="SELECT nombre,id, rango, oficina,zona,image,descripcion, rango, login, generales, patrimonio FROM usuarios WHERE nombre = '$usuario' AND password = '$pass'";

			# ejecuto la orden SQL
			$resultado=mysqli_query($c, $sql);

			if($resultado){
				# nos devuelve cuantas filas contiene $reslultado
				$filas=mysqli_num_rows($resultado);

				if($filas == 0){
					echo '<script type="text/javascript">window.location.href="../index.html";</script>';
				}
				else{
					session_start();
					while ($registro = mysqli_fetch_array($resultado)){

							$_SESSION['nombre']=$registro['nombre'];
							$_SESSION['id']=$registro['id'];
							$_SESSION['zona']=$registro['zona'];
							$_SESSION['oficina']=$registro['oficina'];
							$_SESSION['rango']=$registro['rango'];
							$_SESSION['image']=$registro['image'];
							$_SESSION['descripcion']=$registro['descripcion'];
							$_SESSION['rango']=$registro['rango'];
							$_SESSION['login']=$registro['login'];
							$_SESSION['generales']=$registro['generales'];
							$_SESSION['patrimonio']=$registro['patrimonio'];



							$rango = $registro['rango'];

					}
					if($rango == 'director comercial'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'director territorial'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'director territorialx'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'inspector'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'director oficina'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'campanya_generales'){
						echo '<script type="text/javascript">window.location.href="../menus/menugenerales.php";</script>';
					}
					elseif($rango == 'campanya_vida'){
						echo '<script type="text/javascript">window.location.href="../menus/menupatrimonio.php";</script>';
					}
					elseif($rango == 'campanya_inversion'){
						echo '<script type="text/javascript">window.location.href="../menus/menu-emple-patrimonial.php";</script>';
					}
					elseif($rango == 'director general'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'rrhh'){
						echo '<script type="text/javascript">window.location.href="../menus/menurrhh.php";</script>';
					}
					elseif($rango == 'subdirector'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'director juridico'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'gestion'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'tecnico'){
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
					}
					elseif($rango == 'servicios crediticios'){
						echo '<script type="text/javascript">window.location.href="../menus/menucrediticios.php";</script>';
					}
					else{
						echo '<script type="text/javascript">window.location.href="../menus/menu.php";</script>';
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
	}
?>
