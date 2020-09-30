<?php

/////////////////////////////// Méthode avec le while
function DisplayPairNumber()
{
    $i = 0;

    while ($i <= 50)
    {
        if ($i % 2 == 0)
        {
            echo "Le Nombre est pair {$i} \n";
        }
        else
        {
            echo "Le Nombre est impair {$i} \n";
        }
        ++$i;
    }
}

/////////////////////////////// Méthode For
function DisplayPairNumber()
{
    for ($i = 0; $i <= 50; ++$i)
    {
        if ($i % 2 == 0)
        {
            echo "Le Nombre est pair {$i} \n";
        }
        else
        {
            echo "Le Nombre est impair {$i} \n";
        }
    }
}

/////////////////////////////// Méthode pas très lisible
function IsPair($i)
{
    echo $i . " ";

    if ($i % 2)
        echo "im";
    echo "pair\n";
}

$count = 1;

while ($count <= 50)
{
    IsPair($count);

    ++$count;
}

?>