<?php

$a="\nxxy";

function nekaFcija(){
    global $a;  //global se ne inicijalizira , 
    // kao da smo dohvatili pomoću $a=$GLOBALS['a']

    // echo $GLOBALS['_SERVER']['USERDOMAIN'];
    echo $a;
    $a="\nabcdf";
}
//print_r($GLOBALS);
echo $a;

nekaFcija();

echo $a;

echo "\n ispisi ghlobals a".$GLOBALS['a'];