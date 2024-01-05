<?php

if (4>3){
    echo " 4 je vece od 3<br>";
}
if (3>4){
    echo " ovo se nece nikada izvrsiti<br>";
}
else{
    echo " stvarno tri nije vece od 4<br>";
}


if(4>5){
    echo "4 je vece od 5<br>";  //ne
}
elseif(4>4){
    echo "4 vece od 4?<br>";  //ne
}
elseif(4==4){
    echo "4 jednako 4?<br>";  //da  !!!!!!
}
elseif(4>2){
    echo "4 vece od 4?<br>";  //prethodni je izvrsen i ne provjerava dalje
}
else{
    echo "svaki drugi slucaj<br>"; //nasli smo neki uvjet prije koji je true
}