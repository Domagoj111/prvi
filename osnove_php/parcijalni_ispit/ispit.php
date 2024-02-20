<?php

/* PARCIJALNI ISPIT – Razvoj jednostavne PHP aplikacije za analizu riječi
1. Kreirajte aplikaciju (vidi sliku) koja će iz datoteke words.json u desnu tablicu ispisati sve riječi
koje su analizirane.
2. S lijeve strane kreirajte obrazac kroz koji će se unositi nova riječ.
3. Unesenu riječ treba obraditi na sljedeći način:
1. Polje ne smije biti prazno
2. Izbrojati broj slova u riječi
3. Izbrojati suglasnike I samoglasnike u riječi (za ovu funkcionalnost kreirajte funkcije)
4. Obrađenu riječ treba zapisati u words.json datoteku te ju prikazati u tablici. 

   "Rijec": "",
            "BrojSlova": "",
            "BrojSuglasnika": "",
            "BrojSamoglasnika": " 
*/
$warning = "";
$rijec="";
$brojSlova = 0;
define("SAMOGLASNICI", ["a", "e", "i", "o", "u"]);
//$samoglasnici=['a','e','i','o','u'];
$brojacSamoglasnika=0;
$brojacSuglasnika=0;
// $_GET['posalji_btn']="xxy";
// $_GET['rijec']="bla BLa";
if (isset($_GET['posalji_btn'])) {
    if ($_GET['rijec'] == "") {
        $warning = "Polje ne moze biti prazno";
    }
    $rijec= strtolower($_GET['rijec']);  // sve u mala slova
    $rijec= str_replace(" ", "", $rijec); // ukloni razmake i praznine
    $brojSlova = brojSlova2($rijec);
    $brojacSamoglasnika=samoglasnici($rijec);
    $brojacSuglasnika=$brojSlova-$brojacSamoglasnika;  // što je s prazninama?
    
    $file = 'words.json';
    $rezultat = [
        "Rijec" => $rijec,
        "BrojSlova" => $brojSlova,
        "BrojSuglasnika" => $brojacSuglasnika,
        "BrojSamoglasnika" => $brojacSamoglasnika
    ];

    @file_put_contents($file, json_encode($rezultat,JSON_PRETTY_PRINT));
}
/**
 * vraca broj slova pomoću zazbijanja stringa u niz
 */
function samoglasnici($rijec): int{

    $samoglasnik=0;
    $arr = str_split($rijec, 1);
    foreach ($arr as $key => $value) {
        if(in_array($value,SAMOGLASNICI)==true){
            $samoglasnik++;
        }
    }
    return $samoglasnik;
}
/**
 * vraca broj slova pomoću gotove funkcije strlen
 */
function brojSlova($rijec): int{
    return strlen($rijec);
}
/**
 * vraca broj slova pomoću zazbijanja stringa u niz
 */
function brojSlova2($rijec): int{
    $arr = str_split($rijec, 1);
    return count($arr);
}
?>

<html>

<head>
    <style>
        .float-container {
            border: 3px solid #fff;
            padding: 20px;
            display: flex;
        }

        .float-child {
            width: 50%;
            padding: 20px;
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <div class="float-container">

        <div class="float-child">
            <div class="green">
                <form action="#" method="get">
                    <label for="rijec">Unesi riječ </label><br>
                    <input type="text" name="rijec" required><?= $warning ?><br>
                    <input type="submit" value="Pošalji" name="posalji_btn"><br>
                </form>

            </div>
        </div>

        <div class="float-child">
            <div class="blue">
                <table>
                    <tr>
                        <th>Rijec</th>
                        <th>Broj slova</th>
                        <th>Broj suglasnika</th>
                        <th>Broj samoglasnika</th>
                    </tr>
                    <tr>
                        <td><?= $rijec ?></td>
                        <td><?php echo $brojSlova ?></td>
                        <td><?= $brojacSamoglasnika ?></td>
                        <td><?= $brojacSuglasnika ?></td>
                    </tr>
                </table>

            </div>
        </div>

    </div>

</body>

</html>