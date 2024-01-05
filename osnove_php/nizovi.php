<?php

$voce=["jabuke","šljive"];

var_dump($voce);
echo "<pre>";
print_r($voce);
echo "</pre>";

$voce[]="Jagode";

var_dump($voce);
echo "<pre>";
print_r($voce);
echo "</pre>";

#ispisujemo prvi član, nzovi pocinju s indeksom 0
echo $voce[1];
#ispisujemo drugi član, nzovi pocinju s indeksom 0
echo $voce[2];

$voce[7]="ribizle";

print_r($voce);
$voce[]="borovnice";
print_r($voce);

#koji je bio zadnji index?
echo array_key_last($voce);

#koji je bio prvi index?
echo array_key_first($voce);

#pronadji mi pojam $needle=ribizle, strict znaci da trazi identicnu vrijednost
echo "ribizle se nalaze na indeksu broj:".array_search('ribizle', $voce, $strict = true);

$egzo=$voce;
array_pop($egzo);

print_r($egzo);
/*Erik Fakin: prvi array je onaj koji se komparira sa ostatkom u nizu 8:10 PM */
$borovnice=array_diff($voce,$egzo); // 
print_r($borovnice);

$asocijacije=array("domace","za_rakiju","metkovske", "iz_uvoza");
$asocijativno_voce=array_combine($asocijacije,$egzo);
print_r($asocijativno_voce);

#ispisi voce iz uvoza:
echo $asocijativno_voce['iz_uvoza'];

#funkcija array filter
function odd($var)  // neparni broj
{
    // returns whether the input integer is odd
    //  1 | 1 = 1
    //  1 & 1 = 1   <------ trazimo ovo
    //  1 & 0 = 0
    //  0 | 0 = 0
    // binarni 001 010 011 100 101 ... 1010101010101
    // dec       1   2   3   4   5   
    return $var & 1; // return ($var%2!=0)?$var:'';

    // (izraz true-false) ? true:false
    //return ($var%2==0) ? $var : '';
}

function even($var)
{
    // returns whether the input integer is even
    //return !($var & 1);
    return ($var%2==0) ? '' : $var; // ili  return ($var%2 != 0) ? $var : '';
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]; //asocijativni niz
$array2 = [6, 7, 8, 9 ,10, 11, 12,12];                             //indeksirani niz

echo "Odd :\n";
print_r(array_filter($array1, "odd")); //neparni
echo "Even:\n";
print_r(array_filter($array2, "even"));

$array2 = [6, 7, 8, 9, 'kamencic',10, 11, 12,12];  

$svibrojevi=array_merge($array1,$array2);
print_r($svibrojevi);

$jedinstveni=array_unique($svibrojevi, SORT_STRING); //SORT_STRING=2
//$jedinstveni2=array_unique($svibrojevi, SORT_NUMERIC); //SORT_NUMERIC=1
$jedinstveni2=array_unique($svibrojevi, 1); //SORT_NUMERIC=1

print_r($jedinstveni);
print_r($jedinstveni2);


#niz s asocijacijama
print_r($asocijativno_voce);

#niz s indeksima
print_r(array_values($asocijativno_voce));

array_push($asocijativno_voce,"kikiriki");

print_r($asocijativno_voce);
//$asocijativno_voce[0]="afrika"=>"kikiriki";
$asocijativno_voce=array_replace($asocijativno_voce,["afrika"=>"kikiriki"]);
print_r($asocijativno_voce);
unset($asocijativno_voce[0]);
print_r($asocijativno_voce);

echo"broj clanova niza asocijativnovoce:".count($asocijativno_voce);

shuffle($asocijativno_voce);
print_r($asocijativno_voce);

