<?php

function pozdravi()
{
    return "\nHeloooo";
}
echo pozdravi();
echo pozdravi();
echo pozdravi();
echo pozdravi();
echo pozdravi();

function pozdraviJu($ime)
{
    return "\nHeloooo " . $ime;
}

echo pozdraviJu("Mirna");

function zakompliciraj(string $ime)
{
    return pozdraviJu($ime);
}

echo zakompliciraj("Mirna");
echo zakompliciraj(7);



function zakomplicirajTotalno()
{
    $varijable = func_get_args();  // svi parametri u array
    $imena = "";

    foreach ($varijable as $key => $value) {
        $imena .= ", " . $value;
    }

    return zakompliciraj($imena);
}

echo zakomplicirajTotalno("Mia", "Iva", "Ena", "Rea", "Ana");