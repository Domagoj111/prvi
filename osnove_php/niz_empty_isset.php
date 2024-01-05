<?php

$prazan=[];
$trielem=[1,3,44,"jabuka","jabuka","jabuka"];

var_dump(empty($prazan));
var_dump(empty($trielem));

var_dump(isset($prazan));
var_dump(isset($trielem));

//ima li jabuke u nizu
echo "jabuka je u nizu?".in_array("jabuka",$trielem);
echo "ako je buka u nizu , na kojem je mjestu?".array_search("jabuka",$trielem);
// brisi jabuku ako ju nadjes
//unset($trielem[array_search("jabuka",$trielem)]);
print_r($trielem);
$trielem=array_filter($trielem, 
function($var){ return $var != "jabuka";},ARRAY_FILTER_USE_BOTH); 
print_r($trielem);