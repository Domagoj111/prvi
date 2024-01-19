<?php
session_start();
foreach($_SESSION['books'] AS $book){
   echo $book['title'].PHP_EOL; 
}