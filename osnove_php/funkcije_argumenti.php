<?php

/**
 * Ova funkcija vraca zbroj  unesenih brojeva,  bezobzira koliko ih unijeli 
 * Rezultat zaokuzuje na CJELOBROJNI
 * @return int
 * @example  (tu upisi neki link)
 */
function addNumbers(int|float $a, int|float $b, $printResult = false):int
{
    $rez = 0;
    foreach (func_get_args() as $br) {
        if(gettype($br)=="boolean"){  // preskoci boolean
            continue;
        }
        $rez += $br;
    }
    if ($printResult) {
        echo "\nZbroj je " . $rez." ";
    }
    return $rez;
}

echo addNumbers(3.5, 4);
echo addNumbers(3, 4, true);
echo addNumbers(3, 4, true, 5);
echo addNumbers(3, 4, true, 5, 2, 2, 43, 454, 5, 4, 67, 56, 7);
echo addNumbers(3, 4, false, 5, 2, 2, 43, 454, 5, 4, 67, 56, 7);
echo addNumbers(1,2,3,4,5,6,7,8,$printResult = true);
echo addNumbers(1,2,$printResult = false,3,4,5,6,7,8);
