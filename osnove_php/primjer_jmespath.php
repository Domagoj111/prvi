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

// ucitaj i enkodiraj u array
$booksJson =json_decode(file_get_contents('knjige.json'),1);

print_r($booksJson);

$expression = '[*].title';
print_r(JmesPath\search($expression, $booksJson));

$expression = '[1:3]';
print_r(JmesPath\search($expression, $booksJson));

$expression = '[1:3].title';
print_r(JmesPath\search($expression, $booksJson));

$expression = '[*].{Naziv: title, Stranica: pages}';
print_r(JmesPath\search($expression, $booksJson));