<?php
//rezervirane varijable za petlje
// $i, $j, $k, $ii, $jj, $kk, $ij.....
for ($i = 0; $i < 39; $i += 7) {  // ispisi svaki 7-mi element
    # code...
    echo $i . " ";
}
echo "\n---------------\n";
for ($i = 39; $i > 13; $i -= 7) {  // ispisi svaki 7-mi element unazad
    # code...
    echo $i . " ";
}

echo "\n---------------\n";
for ($i = 39; $i > 13; $i -= 1) {  // ispisi djeljive sa 7
    if ($i % 7 == 0) {
        echo $i . " ";
    }
}


echo "\n---------------\n";
for ($i = 39; $i > 13; $i -= 1) {  // preskoci djeljive sa 7 i sa 3
    if ($i % 3 == 0 || $i % 7 == 0) {
        continue;
    }
    echo $i . " ";
}

// petlja koja ubacuje u indeksirani niz
$niz = array();
for ($i = 0; $i < 22; $i+=2) {
    $niz[] = $i;
}
print_r($niz);


// petlja koja ubacuje u asocijativni niz
$niz2 = array();
for ($i = 0; $i < 9; $i++) {
    $niz2['elem'.$i] = $i*$i;
}
print_r($niz2);