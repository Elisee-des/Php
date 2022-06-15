<?php

// $mot = readline("Saisissez un mot:\n");

// $revers = strrev($mot);

// if ($mot === $revers) {
//     echo " $mot est un palindrome\n";
// }else {
//     echo "$mot n'est pas un palindrome\n";
// }

// $notes = [19, 11, 11, 16];
// $notes2= &$notes;
// $notes2[] = 12;

// // array_push($notes, 20, 21,22);

// // $compte = count($notes);

// // echo "Vous avez ".round($somme/$compte, 1)." de moyenne\n";

// var_dump($notes, $notes2);

// while (true){
//     $mot = readline("Entre un mot: ");
//     if (($mot === "")) {
//         exit("fin du programme\n");
//     }

//     if ((strtolower($mot)) === (strtolower(strrev($mot)))) {
//         echo "palindrome\n";
//     }
//     else {
//         echo "pas palindrome\n";
//     }
// }


// $insultes = ["paresse", "gourmandise", "orgueil"];

// $phrase = readline("Veuiller entrez une phrase: \n");

// foreach($insultes as $insulte)
// {
//     $taille = strlen($insulte);
//     $replace = str_repeat("*", $taille);
//     $phrase = str_replace($insulte, $replace, $phrase);
// }

// $insultes = ["paresse", "gourmandise", "orgueil"];

// $phrase = readline("Veuiller entrez une phrase: \n");

// $asterik = [];
// foreach($insultes as $insulte)
// {
//     $asterik[] = str_repeat("*", strlen($insulte));
// }

// $phrase = str_replace($insultes, $asterik, $phrase);
// echo $phrase;
// // var_dump($mot);

$insultes = ["paresse", "gourmandise", "orgueil"];


$tabRemplace = [];

foreach($insultes as $insulte)
{
    $tabRemplace[] = substr($insulte, 0, 1).str_repeat("*", strlen($insulte)-1);
}
$phrase = readline("Veuiller entrez une phrase: \n");

$phrase = str_replace($insultes, $tabRemplace, $phrase);

echo $phrase;

