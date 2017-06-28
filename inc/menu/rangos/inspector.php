<?php
echo "<li>
  <a href='#' onclick ='mostrarResumen()'><i class='fa fa-inbox'></i> Total Acumulado <span class='label label-danger'>1</span></a>
</li>";

if ($_SESSION['nombre']=='020' || $_SESSION['nombre']=='030' || $_SESSION['nombre']=='016' || $_SESSION['nombre']=='063'){
  echo
  "
  <li>
  <a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
  </li>
  <li>
    <a href='../menus/empleados/empleados_inspector.php'><i class='fa fa-users'></i> Empleados</a>
    </li>
  <li>
  ";
}

elseif($_SESSION['nombre']=='013' || $_SESSION['nombre']=='015'){
  echo
  "
  <li>
    <a href='../menus/empleados/empleados_inspector.php'><i class='fa fa-users'></i> Empleados G.N</a>
    </li>
  <li>
  <a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
  </li>
  ";
}
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
       <?php
       echo $_SESSION['generales'];

      ?> €
     </div>
   </div>
