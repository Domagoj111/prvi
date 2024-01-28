<?php

$names = ["Harry", "Ron", "Hermione"];

$containsHermione = in_array("Hermione", $names);
var_dump($containsHermione);    //true

$containsSteva = in_array("Steva", $names);
var_dump($containsSteva);   //false

$wheresRon = array_search("Ron", $names);
var_dump($wheresRon);   //1(na drugom mjestu niza)

$wheresVoldemort = array_search("Voldemort", $names);
var_dump($wheresVoldemort); //false