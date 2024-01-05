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
echo "<br>";
date_default_timezone_set('Europe/Zagreb');
$currentTime = date('Y-m-d H:i:s');
echo "Local Time: $currentTime"; 
echo "<br>l D d M Y H:i:s j N S w z W F m M n t L<br>";
echo date('l D d M Y H:i:s j N S w z W F m M n t L',time());

echo"<br>danas je ";


switch(strtolower(date('D',time()))){
 case "fri":
 case "friday": echo "Petak"; break;
 case "sun": 
 case "sunday": echo "Nedjelja"; break;
 case "mon": 
 case "monday": echo "Ponedjeljak"; break;
 default: echo "uto, sri, subota"; break;
}