<?php
error_reporting (0);
include_once('load.php');
include_once('config.php');
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
<b>نام محصول:</b>&nbsp<?php echo "$name"; ?><br>
<b>توضیحات:</b><br>&nbsp<?php echo "$dec"; ?><br>
<b>قیمت ( تومان ):</b>&nbsp<?php echo "$price"; ?><br>
<hr>
<center>

<div align="right">
<?php
if($ac=="1")
{
echo 'در صورت اینکه می خواهید این محصول را خریداری نمایید می توانید با کلیک بر روی دکمه زیر به دروازه پرداخت منتقل شوید و سپس بعد از بازگشت لینک دانلود محصول را دریافت خواهید کرد <center>';
echo '
قبل از ادامه اطلاعات زیر را وارد کنید<br>
<form action="send.php" method="GET">
<b>ایمیل شما:</b><input type="text" name="yemail"><br>
<b>شماره موبایل:</b><input type="text" name="tel"><br>
<input type="hidden" name="code" value="' . $code . '">
هیچ یک از اطلاعات بالا فاش نخواهد شد و نزد این سایت نگهداری خواهد شد<br>
<input type="submit" value="خرید این محصول">
';
}
else {
echo '<center><b><h2>امکان خرید آنلاین این محصول وجود ندارد</h2></b></center><br>';
echo '<center><b><h4>می توانید برای خرید با ایمیل زیر در ارتباط باشید</h4></b></center><br>';
echo '<center><b><h4>';
echo "$email";
echo '</h4></b></center>';
}
?>
<br>
</div>
برای بازگشت به صفحه اصلی روی دکمه زیر کلیک کنید<br>
<a href="index.php"><input type="submit" value="بازگشت"></a>
</center>
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