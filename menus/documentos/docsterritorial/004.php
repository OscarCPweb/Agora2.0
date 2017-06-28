<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <div style="margin: auto; width:50%">

  <form action="documentos/docsterritorial/subirArchivo004.php" method="post" enctype="multipart/form-data">
    <input name="archivo" type="file" />

    <input type="text" name="titulo"  placeholder="Poner titulo al archvo" />
    <input type="submit" value="Guardar"/>
  </form>



  <?php

                $dir_path = "documentos/docsterritorial/004/";

                if (is_dir($dir_path)) {
                    if ($dir_handler = opendir($dir_path)) {
                        while (($file = readdir($dir_handler)) !== false) {
                            echo "<a href='documentos/docsterritorial/004/$file'/> $file <br/> </a>";
                        }
                        closedir($dir_handler);
                    }
                }

  ?>
</div>

</body>
<html>
