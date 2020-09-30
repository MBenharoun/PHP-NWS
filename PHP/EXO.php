<?php
function LettreDelete($chaine , $tableau)
{
      $replace = '';
      print_r(str_replace($tableau,$replace,$chaine));
}

function OnlyVoyels($chaine)
{
    $tab = array('B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z');
    $replace = "";
    print_r(str_ireplace($tab, $replace, $chaine));

}

function numberPrime($max)
{
    function PrimeNumber($max)
    {
        for ($i = 2; $i < $max; $i++)
        {
            if ($max % $i == 0)
            {
                return FALSE;
            }
        }
        return TRUE;
    }

    echo 'Nombre premier de 0 à '.$max.' :';
    for ($i = 3; $i < $max; $i++) {
        if (PrimeNumber($i)) {
            echo ' '.$i . ' ';
        }
    }
}
