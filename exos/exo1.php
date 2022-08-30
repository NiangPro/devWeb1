<?php

    $val = 6;

    if($val % 2 === 0)
        echo $val.' est un nombre pair';
    else
        echo $val.' est un nombre impair';
    $cpt = 0;
    $som = 0;
    for ($i=1; $i <$val; $i++) { 
        if($val % $i === 0){
            $cpt++;
            $som += $i;
        }
    }

    if($cpt == 0 || $cpt == 1){
        echo '<br>'.$val.' est premier';
    }else{
        echo '<br>'.$val.' n\'est pas premier';
    }

    if ($som === $val) {
        echo "<br>$val est un nombre parfait";
    }else{
        echo "<br>$val n'est pas un nombre parfait";

    }