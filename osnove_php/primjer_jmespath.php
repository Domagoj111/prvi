<?php
// $https://jmespath.org/tutorial.html
require '../vendor/autoload.php';

$expression = 'foo.*.baz';

$data = [
    'foo' => [
        'bar' => ['baz' => 1],
        'bam' => ['baz' => 2],
        'boo' => ['baz' => 3]
    ]
];

print_r(JmesPath\search($expression, $data));


function htmlTable($jsondata){
    $tabla="<table border='1'>";
    foreach ($jsondata as $key => $value) {
        $tabla.="<tr><td>".$value['title']."</td><td>".$value['author']."</td></tr>";
    }
    $tabla.="</table>";
    return $tabla;
}
// ucitaj i enkodiraj u array
$booksJson =json_decode(file_get_contents('knjige.json'),1);

echo htmlTable($booksJson);

print_r($booksJson);

$expression = '[*].title';
print_r(JmesPath\search($expression, $booksJson));

$expression = '[1:3]';
print_r(JmesPath\search($expression, $booksJson));

$expression = '[1:3].title';
print_r(JmesPath\search($expression, $booksJson));

$expression = '[*].{Naziv: title, Stranica: pages}';
print_r(JmesPath\search($expression, $booksJson));