<?php

extract($_POST);

echo "<pre>";
var_dump($_POST);

echo "Bonjour ".$prenom." nom: $nom, email: $email";
echo "</pre>";