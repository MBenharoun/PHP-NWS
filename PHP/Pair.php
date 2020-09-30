<?php
$file = fopen( "fichier.txt", "a" );
$n = 1;
while ($n < 51 ){
    if ($n %2 ==1)
    {
        echo $n." = nombre impair ";
        fwrite($file,($n." = nombre impair "));
        $n++;
    }
    else
    {
        echo $n." = nombre pair ";
        fwrite($file,($n." = nombre pair "));

        $n++;
    }

}