<?php
$text1 = $_POST ["name"];
$text2 = $_POST ["age"];
$text3 = $_POST ["class"];
$text4 = $_POST ["school"];
$text5 = $_POST ["phonenumber"];
$text6 = $_POST ["score"];
if ($text1 !="")
{
echo("Message successfully sent!");
echo("Field 1: ".$text1);
echo("Field 2: ".$text2);
echo("Field 3: ".$text3);
echo("Field 4: ".$text4);
echo("Field 5: ".$text5);
echo("Field 6: ".$text6);
$file = fopen ("data.txt", "a");
fwrite ($file, $text1);
fwrite ($file, $text2);
fwrite ($file, $text3);
fwrite ($file, $text4);
fwrite ($file, $text5);
fwrite ($file, $text6);
fclose($file);
} else
{
echo("Message delivery failed...");
}
?>