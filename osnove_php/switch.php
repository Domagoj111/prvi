<?php

//$title="breaking bad";
$title="die hard";
switch($title){
case "breaking bad":
case "die hard": echo "classic"; break;
case "casablanca": echo "humprey bogart"; break;
case "home alone": echo "djinglebells"; break;
default: echo "sapunica"; break;
}
$title="mockingbird";
switch($title){
    case "breaking bad": echo "narcosi"; break;
    case "die hard": echo "bald"; break;
    case "casablanca": echo "humprey bogart"; break;
    case "home alone": echo "djinglebells"; break;
    default: echo "sapunica"; break;
    }

$a=5;
$b=100;
$c=15;

echo "<hr>uz pomoc if";

if($a<$b && $c>$b ){
    echo "<hr>b je izmedju a i c";
}
elseif($c<$b && $a>$b ){
    echo "<hr>b je izmedju a i c";
}
else{
    echo "<hr>b NIJE izmedju a i c";
}

echo "<hr>uz pomoc switch case";
switch (true) {
    case ($a<$b && $c>$b )==true:
    case ($c<$b && $a>$b )==true:   
        echo "<hr>b je izmedju a i c";
        break;
    default:
    echo "<hr>b NIJE izmedju a i c";
        break;
}