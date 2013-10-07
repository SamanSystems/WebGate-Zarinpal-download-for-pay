<?php
error_reporting (0);
$a = $_GET['a'];
$forrand = $_GET['forrand'];
function rand_string( $length ) {
    $chars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";    

    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }

    return $str;
}  

$my_string = rand_string( "$forrand" );

?>
<html dir="rtl">
<br>
<form action="index.php" method="GET">
<input type="hidden" name="a" value="1">
<b>تعداد ارقام</b>
<?php
if($a=="")
{
echo '<input type="text" name="forrand">';
}
if($a=="1")
{
echo '<input type="text" name="forrand" value="';
echo "$forrand";
echo '">';
}
?>
<br>
<input type="submit" value="ساخت رمز / دوباره">
</form>
<?php
if($forrand<"10000")
{
if ($a=="1")
{
echo 'کد تصادفی:<br>';
echo '<textarea>';
echo "$my_string";
echo '</textarea>';
}
if ($a=="")
{
echo 'کد تصادفی:<br>';
echo '<textarea>';
echo 'ابتدا در فیلد بالا تعداد ارقام رو وارد کرده و روی دکمه زیر آن کلیک کنید';
echo '</textarea>';
}
}
else {
echo 'شما می توانید حداکثر عدد 10000 را وارد کنید';
}
?>