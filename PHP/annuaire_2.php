<?php

function annuaire($choix)
{
    if ($choix === "0")
    {
        $tab["Nom"] = readline("Entrer le nom :");
        $tab["Prénom"] = readline("Entrer le prénom :");
        $tab["Age"] = readline("Entrer l'âge :");
        $tab["Info"] = readline("Entrer les informations du contact :");

        foreach ($tab as $key => $value)
        {
            $string .= $key . ":" . $value . PHP_EOL;

            $str = $tab["Nom"];
            file_put_contents($str . ".txt", $string);
        }
        
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