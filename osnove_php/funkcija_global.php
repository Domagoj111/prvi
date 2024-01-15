<?php

$a="\nxxy";

/**
 * You SHOULD use @see here instead of @link, but here's how it works:
 * displays <a href="./MyDocs/MyPackage/MyClass.html">MyClass</a>
 * @link https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_tags.link.pkg.html
 * @author Predrag Mrvic <mrvic.predrag@gmail.com>
 */
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