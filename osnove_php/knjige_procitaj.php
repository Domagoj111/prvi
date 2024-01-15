<?php
// Čitanje sadržaja datoteke
$booksJson = file_get_contents('knjige.json');
print_r($booksJson);
// Prebacivanje u niz
$books = json_decode($booksJson, true); // true znaci dekodiraj u array /niz
print_r($books);
?>