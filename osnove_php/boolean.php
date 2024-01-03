<?php

$a=true;
$b=false;
//$a=0;
// unset($a);

var_dump(!$a);

var_dump($a && $b);
var_dump($a and $b);
var_dump($a || $b);
var_dump($a or $b);
echo "<hr>";
$a=true;
$b=true;

var_dump($a && $b);
var_dump($a and $b);
var_dump($a || $b);
var_dump($a or $b);