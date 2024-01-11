<?php

/**
 * ubaci broj u f-ciju, pribroji lokalnoj varijabli 
 * te vrati rezultat. vrijednost treba biti zadrzana
 * 
 */

function pribroji($iznos)
{
    static $trenutniSaldo = 0;
    $trenutniSaldo += $iznos;
    return $trenutniSaldo;
}

echo "\nDodaj u saldo:" . pribroji(5);
echo "\nDodaj u saldo:" . pribroji(5);
echo "\nDodaj u saldo:" . pribroji(5);
echo "\nDodaj u saldo:" . pribroji(5);

$funkcijaSeZove='pribroji';

echo "\nDodaj u saldo:" . $funkcijaSeZove(5);

// slucajan broj 1:10

echo "\nDodaj u saldo:" . $funkcijaSeZove(random_int(1,10));
echo "\nDodaj u saldo:" . $funkcijaSeZove(random_int(1,10));
echo "\nDodaj u saldo:" . $funkcijaSeZove(random_int(1,10));