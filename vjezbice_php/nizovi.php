<?php
//inicijalizacija niza
$status = [
    "name" => "James Bond",
    "status" => "dead",
];
print_r($status);

//uklenjanje elementa iz niza

unset($status["status"]);
print_r($status);