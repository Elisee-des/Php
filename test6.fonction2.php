<?php


// function bonjour($nom = null, $prenom = null)
// {
//     global $prenom;
//     if($nom === null){
//         return "Bonojour ";
//     }
//         return "Bonojour ".$nom. $prenom."\n";

// }

// $salutation1 = bonjour("Jean");
// // $salutation2 = bonjour("Boris");

// echo $salutation1;


// function repondre_oui_non($phrase)
// {
//     while (true) {
//         $reponse = readline($phrase . "o pour oui et n pour non: ");

//         if ($reponse === "o") {
//             return true;
//         }
//         elseif ($reponse === "n")
//         {
//             return false;
//         }
//     }
// }

// $resultat = repondre_oui_non("Voulez vous continuer?: ");

// var_dump($resultat);



// function repondre_oui_non($phrase)
// {
//     while (true) {
//         $reponse = readline($phrase . "o pour oui et n pour non: ");

//         if ($reponse === "o") {
//             return true;
//         } elseif ($reponse === "n") {
//             return false;
//         }
//     }
// }

// function demande_creneau($phrase = "Veuillez entrer un creneau ")
// {
//     echo $phrase . "\n";
//     while (true) {
//         $ouverture = (int)readline("Heure de ouverture :");
//         if ($ouverture >= 0 && $ouverture <= 23) {
//             break;
//         }
//     }

//     while (true) {
//         $fermeture = (int)readline("Heure de fermeture :");
//         if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
//             break;
//         }
//     }
//     return [$ouverture, $fermeture];
// }

// // $resultat = repondre_oui_non("Voulez vous continuer?: ");

// $creneau = demande_creneau();
// $creneau2 = demande_creneau("Veuillez entre votre creneau:");

// var_dump($creneau, $creneau2);



function demande_creneaux(?string $phrase = null): ?array
{
    $creneaux = [];
    $continuer = true;

    while($continuer)
    {
        $creneaux[] = demande_creneau();

        $continuer = repondre_oui_non("Voulez vous continuez? ");
    }
    return $creneaux;
    
}

$creneaux = demande_creneaux("Entrer vos creneaux:");

var_dump($creneaux);


/**
 *  INCLUDE si on ne veut pas quel bloque la suite du script en cas d'erreur
 *  REQUIRE si la function est indispensable pour la suite
 *  REQUIRE_ONCE si on veut l'appeler un seul fois ou plusieur fois
*/