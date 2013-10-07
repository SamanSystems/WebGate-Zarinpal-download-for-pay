<?php
include_once('load.php');
session_start();
if ( isset($_SESSION['userName']) ) {
if ( (isset($_GET['act'])) && ($_GET['act'] == "logOut") )
{
	unset ($_SESSION['userName']);
	header ("Location: login.php");
}
$delet = $_POST['delet'];
$de1 = "../pay/$delet.php";
unlink($de1);
$file = fopen("../pay/$delet.php", "a");
fwrite($file, '<?php');
fclose($file);

$file = fopen("../pay/$delet.php", "a");
fwrite($file, "\n");
fclose($file);

$name = $_POST['name'];
$file = fopen("../pay/$delet.php", "a");
fwrite($file, '$name= "' .  $name . '";');
fclose($file);

$file = fopen("../pay/$delet.php", "a");
fwrite($file, "\n");
fclose($file);

$dec = $_POST['dec'];
$file = fopen("../pay/$delet.php", "a");
fwrite($file, '$dec= "' .  $dec . '";');
fclose($file);

$file = fopen("../pay/$delet.php", "a");
fwrite($file, "\n");
fclose($file);

$price = $_POST['price'];
$file = fopen("../pay/$delet.php", "a");
fwrite($file, '$price= "' .  $price . '";');
fclose($file);

$file = fopen("../pay/$delet.php", "a");
fwrite($file, "\n");
fclose($file);

$do = $_POST['do'];
$file = fopen("../pay/$delet.php", "a");
fwrite($file, '$do= "' .  $do . '";');
fclose($file);

$file = fopen("../pay/$delet.php", "a");
fwrite($file, "\n");
fclose($file);

$online = $_POST['online'];
$file = fopen("../pay/$delet.php", "a");
fwrite($file, '$ac= "' .  $online . '";');
fclose($file);

$file = fopen("../pay/$delet.php", "a");
fwrite($file, '?>');
fclose($file);

header("Location: edit.php");

} else { header ("Location: login.php"); }
?>