<?php
//header('Content-Type: application/json; charset=utf-8');
header("Content-Type: application/json");
//print_r($GLOBALS);
$globalsJSON= json_encode($GLOBALS,JSON_PRETTY_PRINT);

// Ispisi po potrebi
//echo $globalsJSON;

$file = 'globalne_varijable.json';
// Open the file to get existing content
$current = @file_get_contents($file); // znak @ znaci POKUŠAJ izvrsiti funkciju i ignoraj gresku
// Append a new person to the file
$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $globalsJSON);


// ČITAJ FILE:
/*  file_get_contents(
    string $filename,
    bool $use_include_path = false,
    ?resource $context = null,
    int $offset = 0,
    ?int $length = null
): string|false */
 $procitaniFile=file_get_contents($file,false,null,0,filesize($file));

 // ispisi cijeli file
 // echo $procitaniFile;



// ako želim x._SERVER.SERVER_SOFTWARE
// dekodiraj JSON  (kao PHP objekt)
$dekodiraniniz=json_decode($procitaniFile);

//print_r($dekodiraniniz);
//var_dump($dekodiraniniz);

// OBJEKTNI ISPIS
echo $dekodiraniniz->_SERVER->SCRIPT_NAME.PHP_EOL;

// prevaci cijeli JSON u ARRAY  (asocijativni, jer smo stavili jedinicu)
$dekodiraniniz=json_decode($procitaniFile,1);


// ISPIS KAO NIZ
echo $dekodiraniniz['_SERVER']['SCRIPT_NAME'].PHP_EOL;



