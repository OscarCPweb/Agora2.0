<?php

/*

SUBDIRECCION COMERCIAL NORTE
    - MIS DOCUMENTOS
    - CARTERA ZONA NORTE ( GALICIA, LEON-ASTURIAS )
    - PLANIFICAR TAREAS
*/

if($_SESSION['nombre']=='028'){
  echo
  "
  <li>
    <a href='resumenes/territoriales/territorial-leon-asturias.xlsx' data-toggle='modal'><i class='fa fa-star'></i> Leon / Asturias</a>
  </li>
  <li>
    <a href='resumenes/territoriales/territorial-galicia.xlsx'><i class='fa fa-star'></i> Galicia</a>
  </li>
  <li>
    <a href='#misdocumentos028' data-toggle='modal'><i class='fa fa-folder'></i> Mis Documentos</a>
  </li>
  <li>
    <a href='../menus/empleados/empleados_subcomercial.php'><i class='fa fa-users'></i> Empleados DT</a>
  </li>
  <li>
  <a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
  </li>
  <li>
  <a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
  </li>
  ";
}


/***

SUBDIRECCION COMERCIAL SUR
    - MIS DOCUMENTOS
    - CARTERA ZONA NORTE ( MADRID, CADIZ, TENERIFE )
    - PLANIFICAR TAREAS
*/


if($_SESSION['nombre']=='005'){
  echo
  "
  <li>
    <a href='resumenes/territoriales/territorial-centro.xlsx' data-toggle='modal'><i class='fa fa-star'></i> Centro</a>
  </li>
  <li>
    <a href='resumenes/territoriales/territorial-andalucia.xlsx'><i class='fa fa-star'></i> Andalucia</a>
  </li>
  <li>
    <a href='#misdocumentos005' data-toggle='modal'><i class='fa fa-folder'></i> Mis Documentos</a>
  </li>
  <li>
    <a href='../menus/empleados/empleados_subcomercial.php'><i class='fa fa-users'></i> Empleados DT</a>
  </li>
  <li>
  <a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
  </li>
  <li>
  <a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
  </li>
  ";
}

?>