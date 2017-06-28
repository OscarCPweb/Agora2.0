
  <?php

  include('../../../inc/mysql.inc.php');

  function insert($login,$nombre_archivo,$titulo){
  		# me conecto a MySQL Server
  		conecta($c);
  		$fecha_subida = date("Y-m-d");

  		if($c==null)
  			echo "Fallo de conexion";
  		else{
  			mysqli_select_db($c,"db664165726");

  			# creo la orden SQL
  			$sql="INSERT INTO documentos VALUES (0,'$login','$nombre_archivo','$titulo','$fecha_subida',0);";

  			# ejecuto la orden SQL
  			$resultado=mysqli_query($c, $sql);

  			mysqli_close($c);
  		}
  }
    /*
      NOTA:
        Por defecto en XAMPP, el tama�o m�ximo de subida de archivo son 2mb, si ejecutamos phpinfo() y buscamos upload_max_filesize
        en la secci�n Core veremos este l�mite.
        Para aumentar este tama�o:
          En php.ini buscamos upload_max_filesize y aumentamos el tama�o, por ejemplo:  upload_max_filesize=10M
          Reiniciamos XAMPP y listo
    */


    # Esta variable contiene el directorio donde vamos a subir los archivos
    # enviados a trav�s del formulario, LA CARPETA DEBE DE ESTAR CREADA
    $login = "Rufino";
    $titulo = $_POST['titulo'];
    $uploaddir = "comercial/";

    # En esta variable juntamos el directorio de subida con el nombre del archivo subido,
    # de esta forma construimos la ruta a la que ser� copiado el archivo subido
    $uploadfile = $uploaddir.basename($_FILES['archivo']['name']);


    # la variable $error contendr� informaci�n de la subida del archivo
    $error = $_FILES['archivo']['error'];
    $subido = false;

    # el archivo por defecto se sube a la carpeta del servidor web \xampp\tmp
    if($error==UPLOAD_ERR_OK) {
      // si el archivo se ha subido con exito, lo copiamos en nuestra carpeta personal $uploaddir
      $subido = copy($_FILES['archivo']['tmp_name'], $uploadfile);
    }

    if($subido) {
      insert($login,$uploadfile,$titulo);
      echo '<script type="text/javascript">window.location.href="../../menu.php";</script>';

    }
    else {
      echo "Se ha producido un error: ".$error;
    }
