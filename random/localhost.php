<?php
$server = $_SERVER['SERVER_NAME'];
$trans =array(
"1" => "af",
"2" => "t4",
"3" => "h5",
"4" => "8i",
"5" => "9ik",
"6" => "44tg",
"7" => "1rf",
"8" => "6tgh",
"9" => "12tf",
"0" => "gg5d",
"a" => "vgc2",
"b" => "45tfg",
"c" => "ss32",
"d" => "1pos",
"e" => "2sc",
"f" => "2ffg",
"g" => "crt5",
"h" => "1tgh",
"i" => "oih6",
"j" => "5tgh",
"k" => "7uh",
"l" => "15rf",
"m" => "arc2",
"n" => "atg56",
"o" => "pkm76",
"p" => "56rfg",
"q" => "223d",
"r" => "st62",
"s" => "189ob",
"t" => "9haw",
"u" => "we45",
"v" => "657y",
"w" => "5tff",
"x" => "ssd4",
"y" => "s4552",
"z" => "acft43",                           
"." => "rtgss", 
);
$code = strtr($server, $trans);
echo "$code";
?>