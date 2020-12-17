<?php /** @noinspection SpellCheckingInspection */


$utf8 = fopen("utf8.txt", "r");
$cp1250 = fopen("cp1250.txt","r");

echo "[\n";
do {
    $u8c = trim(fgets($utf8));
    $c1c = trim(fgets($cp1250));
    echo '"'.bin2hex($c1c).'" => "'.bin2hex($u8c).'", // '.$u8c."\n";
} while(!feof($utf8));
echo "];\n";
fclose($utf8);
fclose($cp1250);