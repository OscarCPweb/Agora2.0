<?php

echo

"
<li>
  <a href='#' onclick ='mostrarResumen()'><i class='fa fa-inbox'></i> Total Acumulado <span class='label label-danger'>1</span></a>
</li>
<li>
<a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
</li>
<li>
<a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
</li>";
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
      echo $_SESSION['generales']." € Generales <br/>";
      echo $_SESSION['patrimonio']." € Vida";
     ?>
    </div>
  </div>
