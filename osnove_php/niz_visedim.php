<?php

// visedim nizovi

$vdim=array(
    [1,2,3,4,5],  // indeksirani niz
    array('pon','uto','treci_dan'=>'sri'),  // asocijativni niz
    // json
    '{  
        "boja":"zuta",
        "opis":{
           "key":[
                [ 
                {"marka":"fiat","model":"tipo" },
                {"marka":"fiat2","model":"tipo2" },
                {"marka":"fiat3","model":"tipo3"} 
            ],
            12345,
            56789
           ]
        }
     }'
);

print_r($vdim);
echo "utorak je ".$vdim[1][1];
echo "json je <br>\n".$vdim[2];
echo "<hr>";

//dekodiraj json u objekt
var_dump(json_decode($vdim[2]));
$auto=json_decode($vdim[2]);

echo "<br>".$auto->boja;
echo "fiat 2 je:<br>".$auto->opis->key[0][1]->marka;

// dekodiraj json u array
var_dump(json_decode($vdim[2], true));
$auto2=json_decode($vdim[2], true);
print_r(json_decode($vdim[2], true));
echo "array fiat 2 je:<br>".$auto2["opis"]["key"][0][1]["marka"];