<?php
error_reporting (0);
include_once('config.php');
include_once('load.php');
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
<div class="thead"><div align="right"><b>&nbsp&nbspجعبه اعلانات</b></div></div>
<div class="ebox">
<div align="right">
<?php include_once('je.php'); ?>
</div>
</div>
<div class="fota"></div>
<br>
<fieldset>
<form action="pay.php" method="GET">
<b>کد محصول:</b><input type="text" name="code" placeholder="XXXXXXX"><br>
<input type="submit" value="نمایش مشخصات/خرید">
</form>
</fieldset>
<br>
در سیستم دانلود به ازای پرداخت زرین پال هر محصول دارای یک کد می باشد که با درج آن کد در کادر بالا می توانید مشخصات آن محصول را ببینید و در صورت رضایت از محصول آن را خریداری کنید. برای خرید بعد از نمایش مشخصات روی تصویر سبد زیر مشخصات آن کلیک کنید سپس به درگاه پرداخت زرین پال متصل خواهید شد و سپس در صورتی که پرداخت شما به صورت کامل و صحیح انجام شده باشد لینک دانلود محصول به شما نمایش داده خواهد شد و شما می توانید آن محصول را دانلود کنید
<br>
ایمیل پشتیبانی:<br>
<?php echo "$email"; ?>
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
</div>
</html>