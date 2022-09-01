<?php

require_once("fonctions.php");
$entiers = [14, 0, 23, 120, 30, 1204];
echo "<pre>";

echo "Avant decallage<br>";
print_r($entiers);
echo "Apres decallage<br>";
$entiers = decallageNRang($entiers, 3);

print_r($entiers);
echo "</pre>";