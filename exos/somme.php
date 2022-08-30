<?php

    $val = 1235;

    $quotient = intval($val/10);
    $somme = $val%10;

    while($quotient != 0){
        $somme += $quotient%10;
        $quotient = intval($quotient/10);
    }

    echo "La somme des chiffres de $val est de $somme";