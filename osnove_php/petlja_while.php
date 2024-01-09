<?php
$a=5;

while ($a <= 10) {
    # code...
    echo $a." ";
    $a++;
}
echo "<hr> ";

$a=221;
//while ($a >= 10) { // PROBLEM !!!!!! INFINITE LOOP
while ($a >= 10) { // PROBLEM !!!!!! INFINITE LOOP
    # code...
    
    if( $a % 17 == 0 ){  // ukoliko je a djeljivo s 17 ispisi u zagradi
        echo "(".$a.") ";
    }
    else{
      echo $a." ";  
    }
    $a-=3;
}

echo "\n<br>\n ";
$a=220;

while ($a >= 10) { // PROBLEM !!!!!! INFINITE LOOP
    # code...
    
    if( $a % 17 == 0 ){  // ukoliko je a djeljivo s 17 prekini ispis
        echo "(".$a.") ";
        break;
    }
    else{
      echo $a." ";  
    }
    $a-=3;
}

echo "\n<br>\n ";
$a=220;

while ($a >= 10) { // PROBLEM !!!!!! INFINITE LOOP
    # code...
    
    if( $a % 17 == 0 ){  // ukoliko je a djeljivo s 17 umanji broj za 20
        echo "(".$a.") ";
        $a-=20;
        continue;
    }
    else{
      echo $a." ";  
    }
    $a-=3;
}