<?php

// $note = (int)readline("Entrez votre note:");

// if ($note > 10) {
//     echo "Bravo vous avez la moyenne\n";
// }elseif ($note === 10)
// {
//     echo "Vous avez juste la moyenne peux mieux faire\n";
// }else{
//     echo "Desolé vous navez pas la moyenne\n";
// }

$heure = (int)readline("Entrez une heure:");

if(($heure >= 8 && $heure <=12 ) || ($heure >= 14 && $heure <=17 )) 
{
    echo "Le magazin est ouvert";
}else {
    echo "Desoler le magasin est fermé a cette heure\n";
}