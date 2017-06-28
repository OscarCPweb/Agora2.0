<?php
session_start();
$rango = $_SESSION['rango'];

if ( $rango == 'director comercial' ){
  include ("rangos/comercial.php");
}

elseif ( $rango == 'director territorial' ){
  include ("rangos/territorial.php");

}

elseif ( $rango == 'director oficina' ){
  include ("rangos/diroficina.php");

}

elseif ( $rango == 'subdirector' ){
  include ("rangos/subdiroficina.php");

}

elseif ( $rango == 'inspector' ){
  include ("rangos/inspector.php");

}

elseif ( $rango == 'coordinador' ){
  include ("rangos/coordinador.php");

}

elseif ( $rango == 'director general' ){
  include ("rangos/dirgeneral.php");

}
elseif ( $rango == 'gestion' ){
  include ("rangos/gestion.php");

}
elseif ( $rango == 'rrhh' ){
  include ("rangos/rrhh.php");

}
elseif ( $rango == 'crediticios' ){
  include ("rangos/crediticios.php");

}

elseif ( $rango == 'subcomercial' ){
  include ("rangos/subcomercial.php");

}

?>
