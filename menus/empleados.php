<?php
include ("../inc/mysql.inc.php");
conecta($c);

/*
SUBDIRECTORES COMERCIALES
*/
    /* ADOLFO SUBDIRECTOR COMERCIAL NORTE */

    if ($_SESSION['nombre']=='028'){
      $user =  '38';
      $id = '38';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    /* SUSANA TRABAJO SUBDIRECTOR COMERCIAL SUR */
    if($_SESSION['id'] == '005' ){
      $user = '14';
      $id = '14';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }
/*
FIGURAS
*/

    if($_SESSION['id'] == '1' ){
      $user = '1';
      $id = '1';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }
    if($_SESSION['id'] == '2' ){
      $user = '2';
      $id = '2';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }
    if($_SESSION['id'] == 'rrhh' ){
      $user = '46';
      $id = '46';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }
    /* JORGE ALVAREZ */
    else if ($_SESSION['nombre']=='004'){
      $user =  '12';
      $id = '12';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }
    /* ANTONIO MELERO */
    else if ($_SESSION['nombre']=='017'){
      $user =  '27';
      $id = '27';
      include ("../inc/menu/tareas/tareas-comerciales/tareas-no.php");
    }
    
    /* CARLOS GARCIA */
    else if ($_SESSION['nombre']=='006'){
      $user =  '15';
      $id = '15';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }
    /*JULIO MUÑOZ*/
    else if ($_SESSION['nombre']=='068'){
      $user =  '70';
      $id = '70';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }

    /*NATALIA ANTOLIN*/
    else if ($_SESSION['nombre']=='075'){
      $user =  '77';
      $id = '77';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas-no.php");
    }

/*---------------------------------------------------------------------------------------------------------------*/
    /* DIRECTORES DE OFICINA */
    /* DAVID GARCIA */
    else if ($_SESSION['nombre']=='008'){
      $user =  '17';
      $id = '17';
      include ("../inc/menu/tareas/tareas-nocomerciales/tareas.php");
    }
    /* ALVARO MARTIN */
    else if ($_SESSION['nombre']=='018'){
      $user =  '28';
      $id = '28';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    /* DAVID GONZALEZ */
    else if ($_SESSION['nombre']=='008'){
      $user =  '17';
      $id = '17';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }

    /* MERCEDES */
    elseif ($_SESSION['nombre']=='012'){
      $user =  '21';
      $id = '21';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }

    /* SAMUEL LOPEZ */
    else if ($_SESSION['nombre']=='029'){
      $user =  '27';
      $id = '27';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    /* ZARA BEISTEGUI */
    elseif ($_SESSION['nombre']=='024'){
      $user =  '34';
      $id = '34';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    /* JOSE MIGUEL */
    else if ($_SESSION['nombre']=='050'){
      $user =  '60';
      $id = '60';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    /* JESUS FERNANDEZ */
    else if ($_SESSION['nombre']=='010'){
      $user =  '20';
      $id = '20';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
/*---------------------------------------------------------------------------------------------------------------*/
    /* SUB-DIRECTORES DE OFICINA */

    /* JOSE LUIS */
    if ($_SESSION['nombre']=='011'){
      $user =  '21';
      $id = '21';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    
    elseif ($_SESSION['nombre']=='Marisa'){
      $user =  '43';
      $id = '43';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
    /* BENJAMIN */
    elseif ($_SESSION['nombre']=='023'){
      $user =  '33';
      $id = '33';
      include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
    }
/*---------------------------------------------------------------------------------------------------------------*/
   /* INSPECTORES DE OFICINA */
   /*JAVIER FALCON*/
   if($_SESSION['nombre']=='015'){
     $user =  '25';
     $id = '25';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*ROSA PAJON*/
   if($_SESSION['nombre']=='013'){
     $user =  '23';
     $id = '23';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*JUAN CARLOS*/
   if($_SESSION['nombre']=='021'){
     $user =  '31';
     $id = '31';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*LIDIA CONDE*/
   if($_SESSION['nombre']=='022'){
     $user =  '32';
     $id = '32';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*MARIA ORIA*/
   if($_SESSION['nombre']=='016'){
     $user =  '26';
     $id = '26';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*DEMETRIO*/
   if($_SESSION['nombre']=='020'){
     $user =  '30';
     $id = '30';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*MIGUEL ARES*/
   if($_SESSION['nombre']=='030'){
     $user =  '40';
     $id = '40';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*JOSE MARIA*/
   if($_SESSION['nombre']=='063'){
     $user =  '65';
     $id = '65';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
      /*EUGENIO ESTRADA*/
   if($_SESSION['nombre']=='046'){
     $user =  '56';
     $id = '56';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
/*---------------------------------------------------------------------------------------------------------------*/
   /* COORDINADORES DE OFICINA */

   /* SONIA */
   if($_SESSION['nombre']=='045'){
     $user =  '55';
     $id = '55';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /* ELISABETH */
   if($_SESSION['nombre']=='061'){
     $user =  '62';
     $id = '62';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*DANIEL CASTILLO*/
   if($_SESSION['nombre']=='048'){
     $user =  '58';
     $id = '58';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
   /*CRISTINA*/
   if($_SESSION['nombre']=='039'){
     $user =  '49';
     $id = '49';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }

   /*FABIOLA*/
    if($_SESSION['nombre']=='066'){
     $user =  '68';
     $id = '68';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }

   /*FRANCISCO MADRID*/
    if($_SESSION['nombre']=='067'){
     $user =  '69';
     $id = '69';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }

   /*NELLY*/
    if($_SESSION['nombre']=='071'){
     $user =  '72';
     $id = '72';
     include ("../inc/menu/tareas/tareas-comerciales/tareas.php");
   }
 ?>
