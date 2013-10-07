<?php

error_reporting (0);
include_once("../config.php");
include_once("../license.php");
$server = $_SERVER['SERVER_NAME'];
$adress = 'config.php';
if(!is_file($adress))
{
header("location: ../errorpage/config.html");
}
else{

if($licensecode!="$code")
{
header("location: ../errorpage/license.php");
}
}
?>