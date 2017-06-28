
<?php
if($_SESSION['id']=='17'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados G.N</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-gn.zip'><i class='fa fa-eur'></i> Tareas Antiguas G.N</a>
    </li>
    <li>
        <li><a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Estado de la Oficina</a>
    </li>";

}
elseif($_SESSION['id']=='39'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados G.S</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-gs.zip'><i class='fa fa-eur'></i> Tareas Antiguas G.S</a>
    </li>
    <li><a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>";
}
if($_SESSION['id']=='38'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados Asturias</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-as.zip'><i class='fa fa-eur'></i> Tareas Antiguas Asturias</a>
    </li>
    <li><a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>";
}
if($_SESSION['id']=='20'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados Ponferrada</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-po.zip'><i class='fa fa-eur'></i> Tareas Antiguas Ponfe</a>
    </li>
    <li><a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>";
}
if($_SESSION['id']=='60'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados Leon</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-le.zip'><i class='fa fa-eur'></i> Tareas Antiguas León</a>
    </li>
    <li><a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>";
}
if($_SESSION['id']=='27'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados Madrid I</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-ma.zip'><i class='fa fa-eur'></i> Tareas Antiguas Madrid</a>
    </li>
    <li><a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>";
}
if($_SESSION['id']=='28'){
  echo "<li>
    <a href='../menus/empleados/empleados_director-oficina.php'><i class='fa fa-users'></i> Empleados Madrid II</a>
    </li>
    <li>
      <a href='../inc/menu/tareas/historial-tareas/tareas-ma.zip'><i class='fa fa-eur'></i> Tareas Antiguas Madrid</a>
    </li>
    <li><a href='resumenes/diroficina/madrid.xlsx'><i class='fa fa-eur'></i> Estado de la Oficina</a></li>
    <li>
      <a href='#resumen' data-toggle='modal'><i class='fa fa-eur'></i> Cuadro de Mando</a>
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
<a href='#tareas-empleados' data-toggle='modal'><i class='fa fa-calendar'></i> Tarea de los empleados</a>
</li>
";

 ?>
