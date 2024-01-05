<?php

$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];

print_r($trielem);

// gube se asocijacije i resetira se index ključeva
sort($trielem);

print_r($trielem);

$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
krsort($trielem);
echo "<hr> KRSORT() po kljucevima reverse";
print_r($trielem);

$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
ksort($trielem);
echo "<hr> KSORT() po ljucevima ";
print_r($trielem);

$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
asort($trielem);
echo "<hr> asort( po vrijednostima ASC";
print_r($trielem);

$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
ArsOrT($trielem);
echo "<hr> arsort( po vrijednostima DESC";
print_r($trielem);
