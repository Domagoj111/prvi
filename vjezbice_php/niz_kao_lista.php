<?php
//Niz kao lista
$names = ["Harry", "Ron", "Hermione"];
//Niz kao mapa
$status = [
    "name" => "James Potter",
    "status" => "dead",
    "age" => 24,
];
 print_r($names);
 print_r($status);

 $status["age"] = 32;

 print_r($status);

 unset($status["status"]);

 print_r($status);

 print_r($status["name"]);

 print_r($names[2]);
