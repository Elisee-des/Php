<?php

$classe = [
    [
        "nom" => "saki",
        "prenom" => "Morikusaki",
        "age"=>20,
        "note"=>[13, 20, 16, 16]
    ],
    [
        "nom" => "Koruki",
        "prenom" => "Oriorikusaki",
        "age"=>17,
        "note"=>[10, 19, 16, 16]
    ],
];

echo $classe[1]["note"][0];
echo $classe[1]["nom"];
