<?php

function repondre_oui_non(?string $phrase = null)
{
    while (true) {
        $reponse = readline($phrase . "\n -o pour oui et n pour non: \n");

        if ($reponse === "o") {
            return true;
        } elseif ($reponse === "n") {
            return false;
        }
    }
}

require_once "creneaux.php";