<?php

$val = "MaTam";

if (strcmp(strtolower($val), strtolower(strrev($val))) == 0) {
    echo "$val est palyndrome";
}else{
    echo "$val n'est pas palyndrome";
}

$cpt = 0;

$mchaine = strtolower($val);
for ($i=0; $i < strlen($mchaine); $i++) { 
    if($mchaine[$i] == 'e' || $mchaine[$i] == 'o' || $mchaine[$i] == 'a' || $mchaine[$i] == 'u' || $mchaine[$i] == 'y' || $mchaine[$i] == 'i')
        $cpt++;
}

echo "<br>$val comporte $cpt voyelles";