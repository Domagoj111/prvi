<?php

function imeiprezime(string $name,string $surname):string{
    return strtoupper ($name." ".$surname);
}
$imerazmakprezimeveliko = imeiprezime("Marko","Majdak");
echo $imerazmakprezimeveliko;




/* function spojiUVelikaSlova(string $ime, string $prezime):string{
    // lokalni scope (doseg)
       return strtoupper($ime." ".$prezime);
    }
   
   
    $imeVelikoSpojeno=spojiUVelikaSlova("Ivan","Ivanovic");
    echo $imeVelikoSpojeno; */

