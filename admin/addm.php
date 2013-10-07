<?php
include_once('load.php');
include_once('rn.php');
session_start();
if ( isset($_SESSION['userName']) ) {
if ( (isset($_GET['act'])) && ($_GET['act'] == "logOut") )
{
	unset ($_SESSION['userName']);
	header ("Location: login.php");
}
$code = $_POST['code'];
if($code=="-rand-")
{
$filename = $rand;
}
else {
$filename = $code;
}
$file = fopen("../pay/$filename.php", "a");
fwrite($file, '<?php');
fclose($file);

$file = fopen("../pay/$filename.php", "a");
fwrite($file, "\n");
fclose($file);

$name = $_POST['name'];
$file = fopen("../pay/$filename.php", "a");
fwrite($file, '$name= "' .  $name . '";');
fclose($file);

$file = fopen("../pay/$filename.php", "a");
fwrite($file, "\n");
fclose($file);

$dec = $_POST['dec'];
$file = fopen("../pay/$filename.php", "a");
fwrite($file, '$dec= "' .  $dec . '";');
fclose($file);

$file = fopen("../pay/$filename.php", "a");
fwrite($file, "\n");
fclose($file);

$price = $_POST['price'];
$file = fopen("../pay/$filename.php", "a");
fwrite($file, '$price= "' .  $price . '";');
fclose($file);

$file = fopen("../pay/$filename.php", "a");
fwrite($file, "\n");
fclose($file);

$do = $_POST['do'];
$file = fopen("../pay/$filename.php", "a");
fwrite($file, '$do= "' .  $do . '";');
fclose($file);

$file = fopen("../pay/$filename.php", "a");
fwrite($file, "\n");
fclose($file);

$online = $_POST['online'];
$file = fopen("../pay/$filename.php", "a");
fwrite($file, '$ac= "' .  $online . '";');
fclose($file);

$file = fopen("../pay/$filename.php", "a");
fwrite($file, '?>');
fclose($file);

header("Location: add.php?back=add&code=$filename");

} else { header ("Location: login.php"); }
?>