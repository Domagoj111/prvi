<?php
//print_r($GLOBALS);
$globalsJSON= json_encode($GLOBALS,JSON_PRETTY_PRINT);

echo $globalsJSON;

$file = 'globalne_varijable.json';
// Open the file to get existing content
$current = @file_get_contents($file);
// Append a new person to the file
$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $globalsJSON);