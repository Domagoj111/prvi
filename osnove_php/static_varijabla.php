<?php

function mojaStaticVar(){
    static $brojPoziva=0;
    $brojPoziva++;
    return $brojPoziva;
}

echo "funkcija mojastaticvar() broj poziva: ".mojaStaticVar().PHP_EOL;
echo "funkcija mojastaticvar() broj poziva: ".mojaStaticVar().PHP_EOL;
echo "funkcija mojastaticvar() broj poziva: ".mojaStaticVar().PHP_EOL;
echo "funkcija mojastaticvar() broj poziva: ".mojaStaticVar().PHP_EOL;


/**
 * rjesenje ako ne zelimo poslati argument
 * example: echo bojajAuto();
 * Erik Fakin: static $odabranaBoja = "bijela";
 *  if (sizeof(func_get_args()) == 1) {
 *        $odabranaBoja = func_get_arg(0);
 *    }
 *   echo "Bojam u " . $odabranaBoja; 
 */
function bojajAuto($boja){
    static $zadnjaboja="";

    if ($boja!=""){
        $zadnjaboja=$boja;
    }
  
    return $zadnjaboja;
}

echo bojajAuto("zuta ");
echo bojajAuto("plava ");
echo bojajAuto("");
echo bojajAuto("plava ");

