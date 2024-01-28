<?php

/* Definirajte varijable a,b,c i d. 
Varijablama a i b dodijelite vrijednost integer, 
a varijablama c i d vrijednost string.
 */

$a = 10;
$b = 8;
$c = "vojska";
$d = "policija";

// Nad varijablama a i b primijenite sve aritmetičke operatore i ispišite rezultate.

echo $a * $b . "<br>"; // Umnožavanje
echo $a / $b . "<br>"; // Dijeljenje
echo $a + $b . "<br>"; // Zbrajanje
echo $a - $b . "<br>"; // Oduzimanje
echo $a % $b . "<br>"; // Modulo

// Nad varijablama c i d primijenite operator konkatenacije i 
// dobivenu vrijednost dodijelite varijabli f, 
// te ispišite vrijednost varijable f.

$f = $c . $d;
echo $f . "<br>";

// Nad varijablama a i b primijenite 
// jedan od kombiniranih operatora dodjele i ispišite rezultat.

$a += $b; // Ekvivalent a = a + b
echo $a . "<br>";

/* Nad varijablom a i b primijenite operator usporedbe (veće od)
 i pomoću var_dump() funkcije ispišite rezultat. */

$result = $a > $b;
var_dump($result);
?>
