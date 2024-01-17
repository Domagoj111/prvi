<?php

use jsonstatPhpViz\Reader;
use jsonstatPhpViz\RendererTable;

require_once __DIR__.'/../vendor/autoload.php';

//$filename = 'knjige.json';
$filename = 'integer.json';    //TODO pogledaj treba li prilagoditi JSON ili PHP skriptu
//$filename = '../composer.json';
$json = file_get_contents($filename);
$jsonstat = json_decode($json);

$reader = new Reader($jsonstat);
//$table = new RendererTable($reader);
$table = new RendererTable($reader);
$html = $table->render();
echo  $html;