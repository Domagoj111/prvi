<?php


/**
 * 
 *  Napravi f-ciju koja uzima ime i prezime te ih spaja u jedan
 *  string sa razmakom, nakon toga ih pretvara u velika slova
 */
// globalni scope (doseg)
 function spojiUVelikaSlova(string $ime, string $prezime):string{
 // lokalni scope (doseg)
    return strtoupper($ime." ".$prezime);
 }


 $imeVelikoSpojeno=spojiUVelikaSlova("Ivan","Ivanovic");
 echo $imeVelikoSpojeno;