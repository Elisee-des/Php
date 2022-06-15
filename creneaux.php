<?php

function demande_creneau(string $phrase = "Veuillez entrer un creneau "): array
{
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline("Heure de ouverture :");
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }

    while (true) {
        $fermeture = (int)readline("Heure de fermeture :");
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}