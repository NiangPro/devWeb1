<?php

    $val = 17;

    if($val % 2 === 0)
        echo $val.' est un nombre pair';
    else
        echo $val.' est un nombre impair';
    $cpt = 0;
    for ($i=1; $i <= $val; $i++) { 
        if($val % $i === 0){
            $cpt++;
        }
    }

    if($cpt == 2 || $cpt == 1){
        echo $val.' est premier';
    }else{
        echo $val.' n\'est pas premier';
    }