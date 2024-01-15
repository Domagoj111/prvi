<?php
// Čitanje sadržaja datoteke
$booksJson = file_get_contents(__DIR__. '/knjige.json');
// Transformiranje u niz
$books = json_decode($booksJson, true);
print_r($books);
// Dodavanje novih podataka u niz
$books[] = [
    "title" => "One Hundred Years Of Solitude",        
    "author" => "Gabriel Garcia Marquez",        
    "available" => false,        
    "pages" => 457,        
    "isbn" => 9785267006323
];
$books[] =[
    "title" => "tibet",        
    "author" => "ja ",        
    "available" => true,        
    "pages" => 4,        
    "isbn" => 9785211106323
];

$books=array_unique($books, SORT_REGULAR );
print_r($books);

$books= array_values($books);
$books_md5=array();
foreach ($books as $key => $value) {
    $books_md5[]=md5(json_encode($value)."trararrarar"); // verzija s MD5()
    //$books_md5[]=json_encode($value);
}
print_r($books_md5);

// Transformiranje u JSON
$booksJson = json_encode($books,JSON_PRETTY_PRINT);
// Zapisivanje novih podataka u datoteku
file_put_contents(__DIR__ . '/knjige.json', $booksJson); 
?>
