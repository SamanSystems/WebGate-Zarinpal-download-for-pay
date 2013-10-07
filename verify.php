<?php
include_once('config.php');
include_once('load.php');
$code = $_GET['code'];
include_once("pay/$code.php");
?>
<html dir="rtl">
<head>
<title><?php echo "$webtitle" ?></title>
<link href="style/pay.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div class="logo"><img src="images/logo.png"></div>
<div class="mep">
<ul id="me">
<li><a href="index.php">صفحه اصلی</a></li>
<li><a href="admin">بخش مدیریت</a></li>
</ul>
</div>
<div align="center">
<div class="boxb">
<br>
<div class="thead"><div align="right"><b>&nbsp&nbspاطلاعات محصول</b></div></div>
<div class="ebox2">
<div align="right">
<?php


	require_once('lib/nusoap.php');
	
	$MerchantID = $merchant;
	$Amount = $price; //Amount will be based on Toman
	$Authority = $_GET['Authority'];
	
	if($_GET['Status'] == 'OK'){
		// URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
		$client = new nusoap_client('https://de.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl'); 
		$client->soap_defencoding = 'UTF-8';
		$result = $client->call('PaymentVerification', array(
															array(
																	'MerchantID'	 => $MerchantID,
																	'Authority' 	 => $Authority,
																	'Amount'	 	 => $Amount
																)
															)
		);
		
		if($result['Status'] == 100){
			echo 'کد تراکنش شما'. $result['RefID'];
echo '<br>با تشکر از شما برای خرید این محصول<br>';
echo 'لینک دانلود محصول:<br>';
echo '<a href="' . $do . '" target="_blank">دانلود</a><br>';
echo 'در صورت این که به هر دلیل نتوانستید محصول را دریافت کنید با ایمیل مدیریت تماس حاصل فرمایید:<br>';
echo "$email";
		} else {
			echo 'Transation failed. Status:'. $result['Status'];
		}

	} else {
		echo 'Transaction canceled by user';
	}
	

?>
</div>
</div>
<div class="fota"></div>
</div>
<br>
</body>
<div align="right">
<div class="footer">
<div class="activep">
<div class="active">
<?php include_once('logo.php'); ?>
</div>
</div>
</div>
</div>
</html>