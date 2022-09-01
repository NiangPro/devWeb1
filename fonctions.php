<?php

    function somme($a , $b)
    {
        return $a+$b;
    }

    function decallage($tab = []){
        if (count($tab) === 0) {
           $tab = [];
        }else{
            $lastItem = $tab[count($tab) - 1];
            for ($i = count($tab) - 1; $i > 0; $i--) {
                $tab[$i] = $tab[$i - 1];
            }
            $tab[0] = $lastItem;
        }
        return $tab;
    }

    function decallageNRang($tab, $n){
        for ($i=0; $i < $n; $i++) { 
            $tab = decallage($tab);
        }
        return $tab;
    }