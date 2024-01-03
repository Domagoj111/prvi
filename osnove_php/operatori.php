<?php

// ternarni operator )tri varijable
$poruka = 4 < 5 ? 'Zdravo' : 'Dovidjenja';

echo $poruka;
var_dump($poruka);
// ostatak kod djeljenje modulo %

$a=7.0;
$b=6.0;
var_dump($a);
if($a % 2 == 0){
    echo "broj je paran";
}
else{
    echo "broj je neparan";  
}

if ($a==$b){
    echo " brojevi a i b su isti";
}
if ($a === $b){ // iste vrijednosti i istog tipa varijablr
    echo " brojevi a i b su identicni";
}

$text="<br> ovo je nki text";
$text.="u njemu pisem pismo";
$text.="lala";
$text.=$poruka;
$text.="u 123213";
$text.=" ovo je kraj<br>";

echo $text;

var_dump($a==$b);
var_dump($a!=$b);
