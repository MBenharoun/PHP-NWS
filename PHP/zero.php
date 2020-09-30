<?php

function LettreDelete($chaine , $tableau)
{
    $replace = '';
    print_r(str_replace($tableau,$replace,$chaine));
}
LettreDelete('Suprey91mol',array('e','r','y','o'));
