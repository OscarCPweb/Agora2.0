
<?php
echo
"
<li>
  <a href='#' onclick ='mostrarResumen()'><i class='fa fa-inbox'></i> Total Herrero Brigantina <span class='label label-danger'>1</span></a>
</li>
<li>
  <a href='#myModal' data-toggle='modal'><i class='fa fa-star'></i> Resumen de la Oficina </a>
</li>
<li>
  <a href='../menus/empleados/empleados_director_general.php'><i class='fa fa-users'></i> Empleados H.B</a>
</li>
<li>
  <a href='#misdocumentos' data-toggle='modal'><i class='fa fa-folder-open'></i> Mis Documentos</a>
</li>
<li>
  <a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
</li>
<li>
  <a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
</li>
<li>
  <a href='../menus/resumenes/comercial/CM.zip'><i class=' fa fa-file-excel-o'></i> Cuadros de mando</a>
</li>
<li>
  <a href='../menus/resumenes/comercial/territoriales.zip'><i class=' fa fa-info'></i> Territoriales</a>
</li>
<li>
  <a href='#campañas' data-toggle='modal'><i class='fa fa-book'></i>Campañas</a>
</li>
<li>
  <a href='#ranking' data-toggle='modal'><i class='fa fa-book'></i>Ranking</a>
</li>
";
 ?>

 <script>
  function mostrarResumen(){
    if($("#myAlert").find("div#myAlert2").length==0){
      $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
    }
    $("#myAlert").css("display", "");
  }


 </script>

 <div class="" style="display:none;" id="myAlert">
   <h2>Total Herrero Brigantina</h2>
    <div class="alert alert-success alert-dismissable" id="myAlert2">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      1.456.424,55 (25.55%)
    </div>
  </div>
