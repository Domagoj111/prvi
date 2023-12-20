<?php

#cijeli brojevi
$cijeli_broj=5;

var_dump($cijeli_broj);
echo "<br>";

#decimalni brojevi
$dec_broj=5.77;

var_dump($dec_broj);
echo "<br>";
$dec_broj2=3e8; //brzina svjetlosti m/s

var_dump($dec_broj2);
echo "<br>";

#decimalni brojevi hexa
$dec_broj_hex=0xFF;

var_dump($dec_broj_hex);
echo "<br>";



#text
$text_broj="PET";

var_dump($text_broj);
echo "<br>";

#logičke
$istina=false;

var_dump($istina);
echo "<br>";

#nizovi
$niz=[5,'dva',"2324",true,true,false,67.6,8,NULL];

var_dump($niz);
echo "<br>";

$int_niz=[2,32,3,2323,-9,4,34,7];
echo "<br>najmanji integer".min($int_niz);