<?php
echo
"
<li>
<a href='../acceso/cerrar_session.php'><i class='fa fa-trash-o'></i> Cerrar Sesión</a>
</li>
<li>
<a href='#cartera' data-toggle='modal'><i class='fa fa-eur'></i> Cartera</a>
</li>
<li>
<a href='#misdocumentosgestion' data-toggle='modal'><i class='fa fa-folder'></i> Mis Documentos</a>
</li>";

if($_SESSION['nombre']=='gestion'){
  echo " <li>
      <a href='../menus/empleados/empleados_gestion.php'><i class='fa fa-users'></i> Empleados</a>
    </li>";
}
 ?>
