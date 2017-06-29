<?php

	// Se incluye la librería
	include 'apiRedsys.php';

	// Se crea Objeto
	$miObj = new RedsysAPI;
	$importe = $_POST['importe1']."".$_POST['importe2'];

	// Valores de entrada
	$merchantCode 	="327234688";
	$terminal 		="1";
	$amount 		=$importe;
	$currency 		="978";
	$transactionType ="L";
	$merchantURL 	=""; /*URL DE NOTIFICACIÓN (URL donde el TPV Virtual enviará una comunicación EN SEGUNDO PLANO con la información de la operación FINALIZADA,
							tanto en operaciones ACEPTADAS como en operaciones DENEGADAS) */
	$urlOK 			=""; //URL A LA QUE SE REDIRIGIRÁ AL TITULAR CUANDO UNA COMPRA ESTÉ AUTORIZADA
	$urlKO 			=""; //URL A LA QUE SE REDIRIGIRÁ AL TITULAR CUANDO UNA COMPRA ESTÉ DENEGADA
	$order 			=$_POST['poliza'];

	//Entorno
	//$urlPago = "https://sis.redsys.es/sis/realizarPago"; //ENTORNO REAL
	$urlPago = "https://sis-t.redsys.es:25443/sis/realizarPago"; //ENTORNO DE PRUEBAS

	// Se Rellenan los campos
	$miObj->setParameter("DS_MERCHANT_AMOUNT",$amount);
	$miObj->setParameter("DS_MERCHANT_ORDER",strval("$order"));
	$miObj->setParameter("DS_MERCHANT_MERCHANTCODE",$merchantCode);
	$miObj->setParameter("DS_MERCHANT_CURRENCY",$currency);
	$miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE",$transactionType);
	$miObj->setParameter("DS_MERCHANT_TERMINAL",$terminal);
	$miObj->setParameter("DS_MERCHANT_MERCHANTURL",$merchantURL);
	$miObj->setParameter("DS_MERCHANT_URLOK",$urlOK);
	$miObj->setParameter("DS_MERCHANT_URLKO",$urlKO);

	//Datos de configuración
	$version="HMAC_SHA256_V1";
	$key = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';//Clave secreta del terminal

	// Se generan los parámetros de la petición
	$request = "";
	$params = $miObj->createMerchantParameters();
	$signature = $miObj->createMerchantSignature($key);

?>
<html lang="es">
<head>
		<meta charset="utf-8">
		<title>Herrero Brigantina</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<link rel="icon" type="image/png" href=" http://herrero-brigantina.es/wp-content/themes/theme-herrero/img/favicon/mstile-144x144.png" />
		<link rel="stylesheet" href="../assets/css/style.css">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<img src="../../assets/img/herrero.png" width="12%" style="display: block; margin: auto"/>
	<div class="row">
    <div class="col-md-3 col-md-offset-5">
			Grupo Herrero Brigantina de Economica <br/>
			Paseo de la castellana nº 95, planta 29<br/>
			CP. 28046 Madrid <br/>

    </div>
</div>

<div class="row">
	<div class="col-xs-6 col-md-4"></div>
	<div class="col-xs-6 col-md-4">
			<div class="alert alert-success">

			  <strong>Aviso</strong> Usted va a realizar un pago de <b><?php echo $_POST['importe1'].",".$_POST['importe2']; ?> </b>€ a la empresa <b>Herrero Brigantina Servicios crediticios</b></h2>
				¿Desea Continuar?
			</div>

			<div id="form-pago" style="display:none;">
				<form name="frm" action=" <?php echo $urlPago ?>" method="POST" target="_blank" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Acepta las condiciones, Gracias'); return false; }">
				Ds_Merchant_SignatureVersion <input type="text" name="Ds_SignatureVersion" value="<?php echo $version; ?>"/></br>
				Ds_Merchant_MerchantParameters <input type="text" name="Ds_MerchantParameters" value="<?php echo $params; ?>"/></br>
				Ds_Merchant_Signature <input type="text" name="Ds_Signature" value="<?php echo $signature; ?>" /></br>
			</div>
			<center>Aviso Legal: <input type="checkbox" name="checkbox" value="check" id="agree" /><br/>
				<a data-toggle="modal" href="#condiciones">Ver condiciones</a></center>
				<input type="submit" value="Si" class="btn btn-success" style="width:25%; display: block; margin:auto;" ><br/>
				<a href="javascript:window.history.back();"><input type="button" value="No" class="btn btn-danger" style="width:25%; display: block; margin:auto;" ></a>


			</div>
		</div>
	<div class="col-xs-6 col-md-4"></div>
	</div>
	<div id="condiciones" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Aviso Legal</h4>
      </div>
      <div class="modal-body">
      	<?php include("aviso.php"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



	</form>
</div>


</body>

</html>
