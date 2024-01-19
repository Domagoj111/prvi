<?php
session_start();
// Čitanje sadržaja datoteke
$booksJson = file_get_contents('../knjige.json');
$books = json_decode($booksJson, true); // true znaci dekodiraj u array /niz
$_SESSION['books']=$books;

?>