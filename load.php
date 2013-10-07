<?php

include_once("config.php");
$server = $_SERVER['SERVER_NAME'];
$adress = 'config.php';
if(!is_file($adress))
{
header("location: errorpage/config.html");
}
?>