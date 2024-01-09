<?php

$names=["ime1"=>"Pavica",
"ime2"=>"Bara",
"ime3"=>"Dragica",
"ime4"=>"Mila",
"ime5"=>"Reza"];

echo "ekipa za poker\n";

foreach ($names as $kljuc => $ime) {
    echo $kljuc." ----> ".$ime.PHP_EOL; 
    $brojac=0;
}

echo "\n----- prva 4 igraca ----\n";
// skrati na prva 4
$brojac=0;
foreach ($names as $kljuc => $ime) {
    echo $kljuc." ----> ".$ime.PHP_EOL;
    if($brojac>=3) {
        break;
    }
    $brojac++;
}
shuffle($names);

echo "\n----- prva 4 igraca ----\n";
// skrati na prva 4
$brojac=0;
foreach ($names as $kljuc => $ime) {
    echo $kljuc." ----> ".$ime.PHP_EOL;
    if($brojac>=3) {
        break;
    }
    $brojac++;
}
