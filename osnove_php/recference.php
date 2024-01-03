<?php

$a=10;
$b=&$a;

echo $b;
$a=20;

echo $b;

function dodaj2(&$broj){
$broj+=2;
}

dodaj2($a);

echo "<br>nakon dodaj2 a:".$a;
echo "<br>nakon dodaj2 b:".$b;


