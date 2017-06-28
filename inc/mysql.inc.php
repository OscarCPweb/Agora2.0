<?php

$mysql_server="localhost";
$mysql_login="laravel";
$mysql_pass="laravel";

$c;
function conecta(&$c){
  global $mysql_server, $mysql_login, $mysql_pass;

  if($c=mysqli_connect($mysql_server, $mysql_login, $mysql_pass)){
    //Todo ok
  }
  else{
    echo "error en la base de datos";
  }
}

 ?>
