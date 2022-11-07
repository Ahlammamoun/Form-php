<?php

function calculPalier($paramAge, $paramMention, $paramSalaire)
{

    // By default everybody start with level 1
    $palier = 1;

    // Some conditions to the calcul of the rent
    if ($paramMention <= 2) {
        $palier++;
    }


    if ($paramAge >= 25) {
        $palier;
    }


    if ($palier > 3 && $paramSalaire >= 2500) {
        $palier++;
    } elseif ($palier > 3 && $paramSalaire < 2500) {
        $palier--;
    }


    //I assure that the level never be under 0 and over 4
    if ($palier < 0) {
        $palier = 0;
    }
    if ($palier > 4) {
        $palier = 4;
    }

    return $palier;
}
