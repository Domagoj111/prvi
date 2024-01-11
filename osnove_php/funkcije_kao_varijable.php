<?php

/**
 * napisimo nekoliko funkcija sa imenama boja,
 *  pozovimo ih po imenu
 */

 function plava(){
    return "\n#0000FF";  // rgb(0,0,255) #0000FF
 }
 function crvena(){
    return "\n#FF0000";  // rgb(0,0,255) #0000FF
 }
 function zelena(){
    return "\n#00FF00";  // rgb(0,0,255) #0000FF
 }


 //pozovi zelenu

 $bojacebiti="zelena";

 echo zelena();
 echo  $bojacebiti();

 $bojacebiti="crvena";
 echo  $bojacebiti();


 $bojacebiti="plava";
 echo  $bojacebiti();