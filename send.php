<?php
error_reporting (0);
$code = $_GET['code'];
$yemail = $_GET['yemail'];
$tel = $_GET['tel'];
include_once('config.php');
include_once("pay/$code.php");

	require_once('lib/nusoap.php');
	
	$MerchantID = "$merchant";  //Required
	$Amount = "$price"; //Amount will be based on Toman  - Required
	$Description = "خرید محصول $name توسط کاربری با مشخصات : ایمیل $yemail و شماره تلفن $tel از سایت $webtitle";  // Required
	$Email = "$yemail"; // Optional
	$Mobile = "$tel"; // Optional
	$CallbackURL = "$local/verify.php?code=$code";  // Required
	
	
	// URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
	$client = new nusoap_client('https://de.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl'); 
	$client->soap_defencoding = 'UTF-8';
	$result = $client->call('PaymentRequest', array(
													array(
															'MerchantID' 	=> $MerchantID,
															'Amount' 		=> $Amount,
															'Description' 	=> $Description,
															'Email' 		=> $Email,
															'Mobile' 		=> $Mobile,
															'CallbackURL' 	=> $CallbackURL
														)
													)
	);
	
	//Redirect to URL You can do it also by creating a form
	if($result['Status'] == 100)
	{
		Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result['Authority']);
	} else {
		echo'ERR: '.$result['Status'];
	}
?>