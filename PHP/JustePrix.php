)<?php
$chiffreCible = rand(1,100);
retour:

$chiffreDit =  readline();
while ($chiffreDit != $chiffreCible){

    if ($chiffreDit < $chiffreCible) {
        echo "C'est plus   | ";

       goto retour;
        }

    else{
        echo "C'est moins  | ";

        goto retour;
    }
}
    echo "C'est juste !";
