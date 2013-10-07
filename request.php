<?php
include_once('load.php');
include_once('oi.php');
$code = $_GET['code'];
include_once("pay/$code.php");
include_once('config.php');
	require_once dirname(__FILE__) .'/jahanpay.php';
    $client = new jahanpay;
    $api = "$jahanapi" ;
    $callbackUrl = "$local/verify.php?code=$code";
    $orderId = $rand;
    $res = $client->requestpayment($api , $price , $callbackUrl , $orderId , $dec);
	header("location: http://www.jahanpay.com/pay_invoice/{$res}");
		?>
		