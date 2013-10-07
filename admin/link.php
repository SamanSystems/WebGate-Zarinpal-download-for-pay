<?php
error_reporting (0);
$back = $_GET['back'];
include_once('load.php');
if($back=="1")
{
include_once("../config.php");
$ar = $_GET['ar'];
$pach = "/link/";
}
session_start();
if ( isset($_SESSION['userName']) ) {
if ( (isset($_GET['act'])) && ($_GET['act'] == "logOut") )
{
	unset ($_SESSION['userName']);
	header ("Location: login.php");
}
if (session_id() == "")
{
   session_start();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (isset($_POST['captcha_code'],$_SESSION['random_txt']) && md5($_POST['captcha_code']) == $_SESSION['random_txt'])
   {
      unset($_POST['captcha_code'],$_SESSION['random_txt']);
   }
   else
   {
      echo '<b>The entered code was wrong.</b><br>';
      echo '<a href="javascript:history.back()">Go Back</a>';
      exit;
   }
}
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<title>پیشخوان مدیریت</title>
<meta name="generator" content="WYSIWYG Web Builder - http://www.wysiwygwebbuilder.com">
<style type="text/css">
div#container
{
   width: 810px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
}
body
{
   font-size: 8px;
   line-height: 1.1875;
   text-align: center;
   margin: 0;
   background-color: #FEFEFE;
   background-image: url(images/link_bkgrnd.png);
   background-repeat: repeat-x;
   color: #000000;
}
</style>
<link href="wb.validation.css" rel="stylesheet" type="text/css">
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
</style>
<style type="text/css">
#Image1
{
   border: 0px #000000 solid;
}
#Image2
{
   border: 0px #000000 solid;
}
#Image3
{
   border: 0px #000000 solid;
}
#Image4
{
   border: 0px #000000 solid;
}
#Image5
{
   border: 0px #000000 solid;
}
#Image6
{
   border: 0px #000000 solid;
}
#Image7
{
   border: 0px #000000 solid;
}
#Image8
{
   border: 0px #000000 solid;
}
#Image9
{
   border: 0px #000000 solid;
}
#Image10
{
   border: 0px #000000 solid;
}
#Image11
{
   border: 0px #000000 solid;
}
#Image12
{
   border: 0px #000000 solid;
}
#Image13
{
   border: 0px #000000 solid;
}
#Image14
{
   border: 0px #000000 solid;
}
#Image15
{
   border: 0px #000000 solid;
}
#Image16
{
   border: 0px #000000 solid;
}
#Image17
{
   border: 0px #000000 solid;
}
#Image18
{
   border: 0px #000000 solid;
}
#Image19
{
   border: 0px #000000 solid;
}
#Image20
{
   border: 0px #000000 solid;
}
#Image21
{
   border: 0px #000000 solid;
}
#Image22
{
   border: 0px #000000 solid;
}
#Image23
{
   border: 0px #000000 solid;
}
#Image24
{
   border: 0px #000000 solid;
}
#Image25
{
   border: 0px #000000 solid;
}
#Image26
{
   border: 0px #000000 solid;
}
#Image27
{
   border: 0px #000000 solid;
}
#Image28
{
   border: 0px #000000 solid;
}
#Image29
{
   border: 0px #000000 solid;
}
#Image30
{
   border: 0px #000000 solid;
}
#Image31
{
   border: 0px #000000 solid;
}
#Image32
{
   border: 0px #000000 solid;
}
#Image33
{
   border: 0px #000000 solid;
}
#Image34
{
   border: 0px #000000 solid;
}
#Image35
{
   border: 0px #000000 solid;
}
#Image36
{
   border: 0px #000000 solid;
}
#Image37
{
   border: 0px #000000 solid;
}
#Image38
{
   border: 0px #000000 solid;
}
#Image39
{
   border: 0px #000000 solid;
}
#Image40
{
   border: 0px #000000 solid;
}
#Image41
{
   border: 0px #000000 solid;
}
#Image42
{
   border: 0px #000000 solid;
}
#Image43
{
   border: 0px #000000 solid;
}
#Image44
{
   border: 0px #000000 solid;
}
#Image45
{
   border: 0px #000000 solid;
}
#Image46
{
   border: 0px #000000 solid;
}
#Image47
{
   border: 0px #000000 solid;
}
#Image48
{
   border: 0px #000000 solid;
}
#Image49
{
   border: 0px #000000 solid;
}
#Image50
{
   border: 0px #000000 solid;
}
#Image51
{
   border: 0px #000000 solid;
}
#Image52
{
   border: 0px #000000 solid;
}
#Image53
{
   border: 0px #000000 solid;
}
#Image54
{
   border: 0px #000000 solid;
}
#Image55
{
   border: 0px #000000 solid;
}
#Image56
{
   border: 0px #000000 solid;
}
#Image57
{
   border: 0px #000000 solid;
}
#Image58
{
   border: 0px #000000 solid;
}
#Image59
{
   border: 0px #000000 solid;
}
#Image60
{
   border: 0px #000000 solid;
}
#Image61
{
   border: 0px #000000 solid;
}
#Image62
{
   border: 0px #000000 solid;
}
#Image63
{
   border: 0px #000000 solid;
}
#Image64
{
   border: 0px #000000 solid;
}
#Image65
{
   border: 0px #000000 solid;
}
#Image66
{
   border: 0px #000000 solid;
}
#Image67
{
   border: 0px #000000 solid;
}
#Image68
{
   border: 0px #000000 solid;
}
#Image69
{
   border: 0px #000000 solid;
}
#Image70
{
   border: 0px #000000 solid;
}
#Image71
{
   border: 0px #000000 solid;
}
#Image72
{
   border: 0px #000000 solid;
}
#Image73
{
   border: 0px #000000 solid;
}
#Image74
{
   border: 0px #000000 solid;
}
#Image75
{
   border: 0px #000000 solid;
}
#Image76
{
   border: 0px #000000 solid;
}
#Image77
{
   border: 0px #000000 solid;
}
#Image78
{
   border: 0px #000000 solid;
}
#Image79
{
   border: 0px #000000 solid;
}
#wb_Text1 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text1 div
{
   text-align: right;
}
#wb_Text2 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text2 div
{
   text-align: right;
}
#wb_Text4 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text4 div
{
   text-align: right;
}
#Image84
{
   border: 0px #000000 solid;
}
#Image81
{
   border: 0px #000000 solid;
}
#wb_Text3 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text3 div
{
   text-align: right;
}
#wb_Form1
{
   background-color: transparent;
   border: 0px #000000 solid;
}
#wb_Text5 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text5 div
{
   text-align: right;
}
#Editbox1
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#wb_Text6 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text6 div
{
   text-align: right;
}
#Editbox2
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Captcha1Edit
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
#Button1
{
   border: 1px #A9A9A9 solid;
   background-color: #F0F0F0;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#Button2
{
   border: 1px #A9A9A9 solid;
   background-color: #F0F0F0;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
}
#wb_Text7 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   text-align: right;
}
#wb_Text7 div
{
   text-align: right;
}
#Editbox3
{
   border: 1px #A9A9A9 solid;
   background-color: #FFFFFF;
   color :#000000;
   font-family: Arial;
   font-size: 13px;
   text-align: left;
   vertical-align: middle;
}
</style>
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="wb.validation.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
   $("#Form1").submit(function(event)
   {
      var isValid = $.validate.form(this);
      return isValid;
   });
   $("#Captcha1Edit").validate(
   {
      required: true,
      type: 'ajax',
      param: 'captcha1_ajax.php',
      color_text: '#000000',
      color_hint: '#00FF00',
      color_error: '#FFA500',
      color_border: '#000000',
      nohint: true,
      font_family: 'Arial',
      font_size: '13px',
      position: 'topleft',
      offsetx: 0,
      offsety: 0,
      effect: 'none',
      error_text: 'اشتباه'
   });
});
</script>
</head>
<body>
<div id="container">
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:22px;height:43px;z-index:7;">
<img src="images/whois_left.png" id="Image1" alt="" style="width:22px;height:43px;"></div>
<div id="wb_Image2" style="position:absolute;left:22px;top:0px;width:10px;height:43px;z-index:8;">
<img src="images/whois_bg.png" id="Image2" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image3" style="position:absolute;left:32px;top:0px;width:10px;height:43px;z-index:9;">
<img src="images/whois_bg.png" id="Image3" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image4" style="position:absolute;left:42px;top:0px;width:10px;height:43px;z-index:10;">
<img src="images/whois_bg.png" id="Image4" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image5" style="position:absolute;left:52px;top:0px;width:10px;height:43px;z-index:11;">
<img src="images/whois_bg.png" id="Image5" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image6" style="position:absolute;left:62px;top:0px;width:10px;height:43px;z-index:12;">
<img src="images/whois_bg.png" id="Image6" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image7" style="position:absolute;left:72px;top:0px;width:10px;height:43px;z-index:13;">
<img src="images/whois_bg.png" id="Image7" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image8" style="position:absolute;left:82px;top:0px;width:10px;height:43px;z-index:14;">
<img src="images/whois_bg.png" id="Image8" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image9" style="position:absolute;left:92px;top:0px;width:10px;height:43px;z-index:15;">
<img src="images/whois_bg.png" id="Image9" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image10" style="position:absolute;left:102px;top:0px;width:10px;height:43px;z-index:16;">
<img src="images/whois_bg.png" id="Image10" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image11" style="position:absolute;left:112px;top:0px;width:10px;height:43px;z-index:17;">
<img src="images/whois_bg.png" id="Image11" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image12" style="position:absolute;left:122px;top:0px;width:10px;height:43px;z-index:18;">
<img src="images/whois_bg.png" id="Image12" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image13" style="position:absolute;left:132px;top:0px;width:10px;height:43px;z-index:19;">
<img src="images/whois_bg.png" id="Image13" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image14" style="position:absolute;left:142px;top:0px;width:10px;height:43px;z-index:20;">
<img src="images/whois_bg.png" id="Image14" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image15" style="position:absolute;left:152px;top:0px;width:10px;height:43px;z-index:21;">
<img src="images/whois_bg.png" id="Image15" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image16" style="position:absolute;left:162px;top:0px;width:10px;height:43px;z-index:22;">
<img src="images/whois_bg.png" id="Image16" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image17" style="position:absolute;left:172px;top:0px;width:10px;height:43px;z-index:23;">
<img src="images/whois_bg.png" id="Image17" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image18" style="position:absolute;left:182px;top:0px;width:10px;height:43px;z-index:24;">
<img src="images/whois_bg.png" id="Image18" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image19" style="position:absolute;left:192px;top:0px;width:10px;height:43px;z-index:25;">
<img src="images/whois_bg.png" id="Image19" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image20" style="position:absolute;left:202px;top:0px;width:10px;height:43px;z-index:26;">
<img src="images/whois_bg.png" id="Image20" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image21" style="position:absolute;left:212px;top:0px;width:10px;height:43px;z-index:27;">
<img src="images/whois_bg.png" id="Image21" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image22" style="position:absolute;left:222px;top:0px;width:10px;height:43px;z-index:28;">
<img src="images/whois_bg.png" id="Image22" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image23" style="position:absolute;left:232px;top:0px;width:10px;height:43px;z-index:29;">
<img src="images/whois_bg.png" id="Image23" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image24" style="position:absolute;left:242px;top:0px;width:10px;height:43px;z-index:30;">
<img src="images/whois_bg.png" id="Image24" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image25" style="position:absolute;left:252px;top:0px;width:10px;height:43px;z-index:31;">
<img src="images/whois_bg.png" id="Image25" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image26" style="position:absolute;left:262px;top:0px;width:10px;height:43px;z-index:32;">
<img src="images/whois_bg.png" id="Image26" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image27" style="position:absolute;left:272px;top:0px;width:10px;height:43px;z-index:33;">
<img src="images/whois_bg.png" id="Image27" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image28" style="position:absolute;left:282px;top:0px;width:10px;height:43px;z-index:34;">
<img src="images/whois_bg.png" id="Image28" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image29" style="position:absolute;left:292px;top:0px;width:10px;height:43px;z-index:35;">
<img src="images/whois_bg.png" id="Image29" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image30" style="position:absolute;left:302px;top:0px;width:10px;height:43px;z-index:36;">
<img src="images/whois_bg.png" id="Image30" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image31" style="position:absolute;left:312px;top:0px;width:10px;height:43px;z-index:37;">
<img src="images/whois_bg.png" id="Image31" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image32" style="position:absolute;left:322px;top:0px;width:10px;height:43px;z-index:38;">
<img src="images/whois_bg.png" id="Image32" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image33" style="position:absolute;left:332px;top:0px;width:10px;height:43px;z-index:39;">
<img src="images/whois_bg.png" id="Image33" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image34" style="position:absolute;left:342px;top:0px;width:10px;height:43px;z-index:40;">
<img src="images/whois_bg.png" id="Image34" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image35" style="position:absolute;left:352px;top:0px;width:10px;height:43px;z-index:41;">
<img src="images/whois_bg.png" id="Image35" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image36" style="position:absolute;left:362px;top:0px;width:10px;height:43px;z-index:42;">
<img src="images/whois_bg.png" id="Image36" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image37" style="position:absolute;left:372px;top:0px;width:10px;height:43px;z-index:43;">
<img src="images/whois_bg.png" id="Image37" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image38" style="position:absolute;left:382px;top:0px;width:10px;height:43px;z-index:44;">
<img src="images/whois_bg.png" id="Image38" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image39" style="position:absolute;left:392px;top:0px;width:10px;height:43px;z-index:45;">
<img src="images/whois_bg.png" id="Image39" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image40" style="position:absolute;left:402px;top:0px;width:10px;height:43px;z-index:46;">
<img src="images/whois_bg.png" id="Image40" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image41" style="position:absolute;left:412px;top:0px;width:10px;height:43px;z-index:47;">
<img src="images/whois_bg.png" id="Image41" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image42" style="position:absolute;left:422px;top:0px;width:10px;height:43px;z-index:48;">
<img src="images/whois_bg.png" id="Image42" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image43" style="position:absolute;left:432px;top:0px;width:10px;height:43px;z-index:49;">
<img src="images/whois_bg.png" id="Image43" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image44" style="position:absolute;left:442px;top:0px;width:10px;height:43px;z-index:50;">
<img src="images/whois_bg.png" id="Image44" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image45" style="position:absolute;left:452px;top:0px;width:10px;height:43px;z-index:51;">
<img src="images/whois_bg.png" id="Image45" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image46" style="position:absolute;left:462px;top:0px;width:10px;height:43px;z-index:52;">
<img src="images/whois_bg.png" id="Image46" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image47" style="position:absolute;left:472px;top:0px;width:10px;height:43px;z-index:53;">
<img src="images/whois_bg.png" id="Image47" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image48" style="position:absolute;left:482px;top:0px;width:10px;height:43px;z-index:54;">
<img src="images/whois_bg.png" id="Image48" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image49" style="position:absolute;left:492px;top:0px;width:10px;height:43px;z-index:55;">
<img src="images/whois_bg.png" id="Image49" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image50" style="position:absolute;left:502px;top:0px;width:10px;height:43px;z-index:56;">
<img src="images/whois_bg.png" id="Image50" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image51" style="position:absolute;left:512px;top:0px;width:10px;height:43px;z-index:57;">
<img src="images/whois_bg.png" id="Image51" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image52" style="position:absolute;left:522px;top:0px;width:10px;height:43px;z-index:58;">
<img src="images/whois_bg.png" id="Image52" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image53" style="position:absolute;left:532px;top:0px;width:10px;height:43px;z-index:59;">
<img src="images/whois_bg.png" id="Image53" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image54" style="position:absolute;left:542px;top:0px;width:10px;height:43px;z-index:60;">
<img src="images/whois_bg.png" id="Image54" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image55" style="position:absolute;left:552px;top:0px;width:10px;height:43px;z-index:61;">
<img src="images/whois_bg.png" id="Image55" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image56" style="position:absolute;left:562px;top:0px;width:10px;height:43px;z-index:62;">
<img src="images/whois_bg.png" id="Image56" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image57" style="position:absolute;left:572px;top:0px;width:10px;height:43px;z-index:63;">
<img src="images/whois_bg.png" id="Image57" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image58" style="position:absolute;left:582px;top:0px;width:10px;height:43px;z-index:64;">
<img src="images/whois_bg.png" id="Image58" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image59" style="position:absolute;left:592px;top:0px;width:10px;height:43px;z-index:65;">
<img src="images/whois_bg.png" id="Image59" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image60" style="position:absolute;left:602px;top:0px;width:10px;height:43px;z-index:66;">
<img src="images/whois_bg.png" id="Image60" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image61" style="position:absolute;left:612px;top:0px;width:10px;height:43px;z-index:67;">
<img src="images/whois_bg.png" id="Image61" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image62" style="position:absolute;left:622px;top:0px;width:10px;height:43px;z-index:68;">
<img src="images/whois_bg.png" id="Image62" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image63" style="position:absolute;left:632px;top:0px;width:10px;height:43px;z-index:69;">
<img src="images/whois_bg.png" id="Image63" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image64" style="position:absolute;left:642px;top:0px;width:10px;height:43px;z-index:70;">
<img src="images/whois_bg.png" id="Image64" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image65" style="position:absolute;left:652px;top:0px;width:10px;height:43px;z-index:71;">
<img src="images/whois_bg.png" id="Image65" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image66" style="position:absolute;left:662px;top:0px;width:10px;height:43px;z-index:72;">
<img src="images/whois_bg.png" id="Image66" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image67" style="position:absolute;left:672px;top:0px;width:10px;height:43px;z-index:73;">
<img src="images/whois_bg.png" id="Image67" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image68" style="position:absolute;left:682px;top:0px;width:10px;height:43px;z-index:74;">
<img src="images/whois_bg.png" id="Image68" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image69" style="position:absolute;left:692px;top:0px;width:10px;height:43px;z-index:75;">
<img src="images/whois_bg.png" id="Image69" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image70" style="position:absolute;left:702px;top:0px;width:10px;height:43px;z-index:76;">
<img src="images/whois_bg.png" id="Image70" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image71" style="position:absolute;left:712px;top:0px;width:10px;height:43px;z-index:77;">
<img src="images/whois_bg.png" id="Image71" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image72" style="position:absolute;left:722px;top:0px;width:10px;height:43px;z-index:78;">
<img src="images/whois_bg.png" id="Image72" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image73" style="position:absolute;left:732px;top:0px;width:10px;height:43px;z-index:79;">
<img src="images/whois_bg.png" id="Image73" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image74" style="position:absolute;left:742px;top:0px;width:10px;height:43px;z-index:80;">
<img src="images/whois_bg.png" id="Image74" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image75" style="position:absolute;left:752px;top:0px;width:10px;height:43px;z-index:81;">
<img src="images/whois_bg.png" id="Image75" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image76" style="position:absolute;left:762px;top:0px;width:10px;height:43px;z-index:82;">
<img src="images/whois_bg.png" id="Image76" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image77" style="position:absolute;left:772px;top:0px;width:10px;height:43px;z-index:83;">
<img src="images/whois_bg.png" id="Image77" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Image78" style="position:absolute;left:792px;top:0px;width:22px;height:43px;z-index:84;">
<img src="images/whois_right.png" id="Image78" alt="" style="width:22px;height:43px;"></div>
<div id="wb_Image79" style="position:absolute;left:782px;top:0px;width:10px;height:43px;z-index:85;">
<img src="images/whois_bg.png" id="Image79" alt="" style="width:10px;height:43px;"></div>
<div id="wb_Text1" style="position:absolute;left:545px;top:8px;width:236px;height:24px;text-align:right;z-index:86;">
<span style="color:#FFFFFF;font-family:Tahoma;font-size:20px;"><strong>پیشخوان مدیریت</strong></span></div>
<div id="wb_Text2" style="position:absolute;left:24px;top:9px;width:56px;height:24px;text-align:right;z-index:87;">
<span style="color:#FFFFFF;font-family:Tahoma;font-size:20px;"><strong>V1.0</strong></span></div>
<div id="wb_Shape1" style="position:absolute;left:444px;top:70px;width:351px;height:316px;z-index:88;">
<img src="images/img0001.png" id="Shape1" alt="" style="border-width:0;width:351px;height:316px;"></div>
<div id="wb_Text4" style="position:absolute;left:464px;top:149px;width:315px;height:171px;text-align:right;z-index:89;">
<span style="color:#000000;font-family:Tahoma;font-size:16px;"><strong>در این سیستم می توانید برای هر محصول یک کد تعریف کنید و کاربر با درج آن در صفحه اصلی می تواند مشخصات آن محصول را مشاهده کند و در صورت تمایل آن را بخرد<br>ولی اگر می خواهید یک لینک مستقیم برای هر محصول داشته باشید می توانید از طریق این قسمت یک لینک مستقیم برای محصول خود ایجاد کنید </strong></span></div>
<div id="wb_Image84" style="position:absolute;left:95px;top:0px;width:39px;height:39px;z-index:90;">
<a href="?act=logOut"><img src="images/exit.png" id="Image84" alt="" style="width:39px;height:39px;"></a></div>
<div id="wb_Image81" style="position:absolute;left:445px;top:71px;width:350px;height:50px;z-index:91;">
<a href="link.php"><img src="images/link.png" id="Image81" alt="" style="width:350px;height:50px;"></a></div>
<div id="wb_Shape2" style="position:absolute;left:7px;top:71px;width:429px;height:316px;z-index:92;">
<img src="images/img0002.png" id="Shape2" alt="" style="border-width:0;width:429px;height:316px;"></div>
<div id="wb_Shape3" style="position:absolute;left:7px;top:71px;width:429px;height:53px;z-index:93;">
<img src="images/img0003.png" id="Shape3" alt="" style="border-width:0;width:429px;height:53px;"></div>
<div id="wb_Text3" style="position:absolute;left:117px;top:82px;width:306px;height:24px;text-align:right;z-index:94;">
<span style="color:#FFFFFF;font-family:Tahoma;font-size:20px;"><strong>اضافه کردن لینک مستقیم</strong></span></div>
<div id="wb_Form1" style="position:absolute;left:14px;top:130px;width:414px;height:181px;z-index:95;">
<form method="POST" action="addlink.php">
<div id="wb_Text5" style="position:absolute;left:308px;top:12px;width:98px;height:19px;text-align:right;z-index:0;">
<span style="color:#000000;font-family:Tahoma;font-size:16px;"><strong>کد محصول:</strong></span></div>
<input type="text" style="position:absolute;left:177px;top:7px;width:126px;height:27px;line-height:27px;z-index:1;" name="cm">
<div id="wb_Text6" style="position:absolute;left:309px;top:59px;width:98px;height:19px;text-align:right;z-index:2;">
<span style="color:#000000;font-family:Tahoma;font-size:16px;"><strong>نام لینک:</strong></span></div>
<input type="text" style="position:absolute;left:177px;top:53px;width:126px;height:27px;line-height:27px;z-index:3;" name="ln">
<div id="wb_Captcha1" style="position:absolute;left:9px;top:17px;width:156px;height:58px;z-index:4;">
<img src="captcha1.php" alt="Click for new image" title="Click for new image" style="cursor:pointer;width:100px;height:38px;" onclick="this.src='captcha1.php?'+Math.random()">
<input type="text" id="Captcha1Edit" style="position:absolute;left:105px;top:16px;width:56px;height:20px;line-height:20px;;" name="captcha_code" value=""></div>
<input type="submit" id="Button1" name="" value="ایجاد" style="position:absolute;left:20px;top:115px;width:371px;height:25px;z-index:5;">
<input type="reset" id="Button2" name="" value="دوباره" style="position:absolute;left:20px;top:146px;width:371px;height:25px;z-index:6;">
</form>
</div>
<div id="wb_Text7" style="position:absolute;left:61px;top:318px;width:362px;height:13px;text-align:right;z-index:96;">
<span style="color:#000000;font-family:Tahoma;font-size:11px;"><strong>بعد از ساخته شدن لینک را در فیلد زیر مشاهده خواهید کرد</strong></span></div>
<input type="text" id="Editbox3" style="position:absolute;left:15px;top:344px;width:409px;height:27px;line-height:27px;z-index:97;" name="Editbox1" value="<?php echo "$local"; echo "$pach"; echo "$ar"; ?>">
<div id="wb_Image80" style="position:absolute;left:143px;top:0px;width:38px;height:38px;z-index:112;">
<a href="javascript: history.go(-1)"><img src="images/forward.png" id="Image80" alt="" style="width:38px;height:38px;"></a></div>
</div>
</body>
</html>
<?php } else { header ("Location: login.php"); } ?>