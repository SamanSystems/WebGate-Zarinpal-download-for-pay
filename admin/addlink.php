<?php
include_once('load.php');
session_start();
if ( isset($_SESSION['userName']) ) {
if ( (isset($_GET['act'])) && ($_GET['act'] == "logOut") )
{
	unset ($_SESSION['userName']);
	header ("Location: login.php");
}

$cm = $_POST['cm'];
$ln = $_POST['ln'];
include_once("../config.php");

$file = fopen("../link/$ln.php", "a");
fwrite($file, '<?php');
fclose($file);

$file = fopen("../link/$ln.php", "a");
fwrite($file, "\n");
fclose($file);

$file = fopen("../link/$ln.php", "a");
fwrite($file, 'header("location: ' .  $local . '/pay.php?code=' .  $cm . '");');
fclose($file);

$file = fopen("../link/$ln.php", "a");
fwrite($file, "\n");
fclose($file);

$file = fopen("../link/$ln.php", "a");
fwrite($file, '?>');
fclose($file);

header("Location: link.php?back=1&ar=$ln.php");

} else { header ("Location: login.php"); }
?>