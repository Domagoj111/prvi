<?php

if(!isset($_POST['username'])){
 echo "username varijabla ne moze biti prazna!";
}
if(!isset($_POST['password']) || $_POST['password']==""){
 echo "password varijabla ne moze biti prazna!";
}
else{
    echo "Uspješno ste unijeli vase podatke".PHP_EOL;
    Echo $_POST['username']." ".$_POST['password'].PHP_EOL;
}