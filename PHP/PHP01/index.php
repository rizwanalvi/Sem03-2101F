<?php
$StudetnName = "AHMED KHAN";

echo $StudetnName;

echo "<h1>$StudetnName</h1>";

echo gettype($StudetnName);
echo "<br/>";

$StudetnName = 101;
echo gettype($StudetnName);
echo "<br/>";

$StudetnName = 25.6;
echo gettype($StudetnName);
echo "<br/>";


$StudetnName = 25.6;
echo gettype($StudetnName);
echo "<br/>";

$CardNumber = 12345678;

echo "<h3>$CardNumber</h3>";
$dataType = gettype($CardNumber);
echo "<h3>$dataType </h3>";

settype($CardNumber,"string");

$dataType = gettype($CardNumber);
echo "<h3>$dataType </h3>";

//OPERATORS IN PHP
//AIRTHMATIC OPERATORS + / * - %
//INCREMENTAL OPERATOR ++X X++
//DECREMETAL OPERATOR --X X--
//assignment operators = += -= *= /= %=
$x = 10;
$y=10;
echo $x++;
echo "<h3>".$x++."</h3>";
echo $x;
echo "<h3>".++$x."</h3>";
echo $x+$y."<br/>";

$x /= 3;
echo $x;
