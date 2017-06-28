
<?php

if($_SESSION['id']=='43'){
  echo "
  <li>
    <a href='resumenes/diroficina/galicia-norte.xlsx'><i class='fa fa-eur'></i> Estado de la Oficina</a>
  </li>
    <li>
    <a href='../menus/empleados/empleados_subdirector-oficina.php'><i class='fa fa-users'></i> Empleados G.N</a>
    </li>
    <li>
      <a href='resumenes/diroficina/cuadros/galicianorte.pdf'><i class='fa fa-eur'></i> Cuadro de Mando</a>
    </li>";
}
if($_SESSION['id']=='34'){
  echo "
  <li><a href='resumenes/diroficina/asturias.xlsx'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>
    <li>
    <a href='../menus/empleados/empleados_subdirector-oficina.php'><i class='fa fa-users'></i> Empleados Asturias</a>
    </li>
    <li>
      <a href='resumenes/diroficina/cuadros/asturias.pdf'><i class='fa fa-eur'></i> Cuadro de Mando</a>
    </li>";
}
if($_SESSION['id']=='22'){
  echo "
  <li><a href='resumenes/diroficina/ponferrada.xlsx'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>
    <li>
    <a href='../menus/empleados/empleados_subdirector-oficina.php'><i class='fa fa-users'></i> Empleados Ponferrada</a>
    </li>
    <li>
      <a href='resumenes/diroficina/cuadros/ponferrada.pdf'><i class='fa fa-eur'></i> Cuadro de Mando</a>
    </li>";
}
if($_SESSION['id']=='21'){
  echo "    <li><a href='resumenes/diroficina/leon.pdf'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>
<li>
    <a href='../menus/empleados/empleados_subdirector-oficina.php'><i class='fa fa-users'></i> Empleados Leon</a>
    </li>
    <li>
      <a href='resumenes/diroficina/cuadros/leon.pdf'><i class='fa fa-eur'></i> Cuadro de Mando</a>
    </li>";
}
if($_SESSION['id']=='33'){
  echo "
  <li><a href='resumenes/diroficina/madrid.xlsx'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>
<li>
    <a href='../menus/empleados/empleados_subdirector-oficina.php'><i class='fa fa-users'></i> Empleados Madrid I</a>
    </li>
    <li>
      <a href='resumenes/diroficina/cuadros/madrid.pdf'><i class='fa fa-eur'></i> Cuadro de Mando</a>
    </li>";
}
if($_SESSION['id']=='37'){
  echo "<li>
    <a href='../menus/empleados/empleados_subdirector-oficina.php'><i class='fa fa-users'></i> Empleados Cádiz</a>
    </li>
    <li>
      <a href='resumenes/diroficina/cuadros/cadiz.pdf'><i class='fa fa-eur'></i> Cuadro de Mando</a>
    </li>";
}
echo "
<li>
<a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
</li>
<li>
<a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
</li>
<li>
<a href='#tareas-empleados' data-toggle='modal'><i class='fa fa-eur'></i> Tarea de los empleados</a>
</li>
";

 ?>
