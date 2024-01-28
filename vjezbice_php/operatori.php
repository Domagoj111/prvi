<?php

/* Definirajte varijable a,b,c i d. 
Varijablama a i b dodijelite vrijednost integer, 
a varijablama c i d vrijednost string.
 */

$a=10;
$b=8;
$c="vojska";
$d="policija";

//Nad varijablama a i b primijenite sve aritmetičke operatore i ispišite rezultate.

echo $a*$b;
echo $a/$b;
echo $a+$b;
echo $a-$b;
echo $a%$b;

// Nad varijablama c i d primijenite operator konkatenacije i 
// dobivenu vrijednost dodijelite varijabli f, 
// te ispišite vrijednost varijablef.

$f=$c.$d;
echo $f;

//Nad varijablama a i b primijenite 
//jedan od kombiniranih operatora dodjele i ispišite rezultat.

echo $a+= $b;   //ekvivalent $a = $a + $b

/* Nad varijablom a i b primijenite operator usporedbe (većeod)
 i pomoću var_dump()funkcije ispišite rezultat. */

$result = $a > $b;
var_dump($result);

$a++;

echo $a;

$b--;

echo $b;
