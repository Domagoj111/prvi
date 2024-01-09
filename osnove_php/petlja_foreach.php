<?php

// petlja koja ubacuje u asocijativni niz
$niz2 = array();
for ($i = 0; $i < 9; $i++) {
    $niz2['elem'.$i] = $i*$i;
}
print_r($niz2);

foreach ($niz2 as $key => $value) {
    echo "ključ je:".$key." vrijednost je:".$value.PHP_EOL;
}

foreach ($niz2 as $value) {  // bez ključeva
    echo "vrijednost je:".$value.PHP_EOL;
}

foreach ($niz2 as $key => $value) { // samo ključevi
    echo "ključ je:".$key.PHP_EOL;
}

print_r(get_defined_vars());

$sveVarijable=get_defined_vars();

foreach ($sveVarijable as $key => $value) {
    if(gettype($value)=="array"){
        continue;
    }
    echo $key." ".gettype($value)." vrijednost:".$value.PHP_EOL;
}

$allVarsJSON=json_encode($sveVarijable,$flasg=JSON_PRETTY_PRINT);
echo $allVarsJSON;