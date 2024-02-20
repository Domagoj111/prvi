<?php
function danTjedna() {
    $dan = date('N');  // N vraća dan u tjednu kao broj (1 za ponedjeljak, 2 za utorak, itd.)

    switch ($dan) {
        case 1:
            return "Ponedjeljak";
        case 2:
            return "Utorak";
        case 3:
            return "Srijeda";
        case 4:
            return "Četvrtak";
        case 5:
            return "Petak";
        case 6:
            return "Subota";
        case 7:
            return "Nedjelja";
        default:
            return "Nepoznat dan";
    }
}

echo "Trenutni dan je: " . danTjedna();
?>


