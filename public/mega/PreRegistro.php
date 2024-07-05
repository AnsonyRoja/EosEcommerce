<?php
session_start();
include_once './Clases/Login.php';
include_once './RedireccionFormulario.php';
include './constantes.php';

$nro_orden=$_GET['nro_orden'];
$monto=$_GET['total'];

$url = URL_MEGA."/payment/action/paymentgatewayuniversal-".
    "prereg?cod_afiliacion=".CODAFILIACION."&factura=$nro_orden&monto=$monto";

$control = new Login();
$numeroControl=$control->loginHTTPS($url,USERNAME,PASSWORD);

if(is_numeric($numeroControl)){
	$_SESSION[$nro_orden]=$numeroControl;
	RedireccionFormulario::redireccionar($numeroControl,URL_MEGA);
}else{
	echo "<div style='text-align:center'>
	<div style='text-align: center; '><img src='../logo.png' width='200' /></div>
	<p>&nbsp;</p>
	
	Disculpe, en este momento no podemos procesar su pago, intente mas tarde.</div>";
}

?>
