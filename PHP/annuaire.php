<?php

function annuaire($choix)
{
    if ($choix === "0")
    {
        $tab["Nom"] = readline("Entrer le nom :");
        $tab[0] = PHP_EOL;
        $tab["Prénom"] = readline("Entrer le prénom :");
        $tab[1] = PHP_EOL;
        $tab["Age"] = readline("Entrer l'âge :");
        $tab[2] = PHP_EOL;
        $tab["Info"] = readline("Entrer les informations du contact :");
        $str = $tab["Nom"];
        file_put_contents($str . ".txt", $tab);
        echo ("Votre fichier à bien été créé");
        return;
    }
    elseif ($choix === "1")
    {
        $var = readline("Entrer le nom à rechercher :");
        return(file_get_contents ($var . ".txt"));
    }
    else
    {
        return("Connard écrit 0 ou 1 putain (relance le code débile)");
    }
}


$choix = readline ("Voulez vous créer (0) ou rechercher (1) un fichier?");
echo (annuaire($choix));

?>