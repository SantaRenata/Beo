<?php
$szam = 35;
echo "<!DOCTYPE html>\n";
echo "<html>";
echo "<body>";

echo "alag\nsor<br>";
echo "alag<br>sor";
echo "<br>Tipus: ".gettype($szam);

echo <<<Kiskutya
<ul>
    <li>alma</li>
    <li>körte</li>
</ul>
Kiskutya;

echo "<br>PHP_OS: ".PHP_OS;
const MIN_KOR=18;
echo "<br>Jöhet: ".MIN_KOR;

printf("<br>|%20d|",58);

//Matematikai függvények
echo "<br>";
echo sqrt(9);

echo "<br>";
$szog=1;
echo sin($szog*pi()/180);

echo "<br>";
echo pow(2,8);

echo "<br>";
echo rand(1,6);

echo "<br>";
$szamStr = "35";
echo $szamStr+2;

echo "<br>";


echo "</body></html>";
?>