<?php

$primeNumbers = array(2,3,5,7,11);

if (isset($primeNumbers[2])){
    $treciElement = $primeNumbers[2];
    var_dump($treciElement);
}
else    {
    echo"Treći element u nizu ne postoji";
}

$primeNumbers[] = 13;   //dodajem ing


$brojElemenata = count($primeNumbers);
print_r($brojElemenata);

print_r($primeNumbers);

$primeNumbers1 = $primeNumbers2 = $primeNumbers;

arsort($primeNumbers1);

print_r($primeNumbers1);