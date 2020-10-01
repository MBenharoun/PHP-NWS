<?php
//function Tri_insert($tabs)
//{
//    $N = count($tabs);
//    for ($i = 1 ; $i < $N -1;$i++) {
//        $x = $tabs[$i];
//        $j = $i;
//        while (($j > 0) && ($tabs[$j - 1] > $x)) {
//            $vala = $tabs[$j - 1];
//            $valb = $tabs[$j];
//            $tabs[$j - 1] = $valb;
//            $tabs[$j] = $vala;
//            $j = $j - 1;
//        }
//        $tabs[$j] = $x;
//    }
//    return $tabs;
//}

//-----------------------------

$time_start = microtime(true);

function Tri_insert($liste)
{
    $taille = count($liste);
    for($i = 0; $i < $taille; $i++)
    {
        $element_a_inserer = $liste[$i];
        for($j = 0; $j < $i; $j++)
        {
            $element_courant = $liste[$j];
            if ($element_a_inserer < $element_courant)
            {
                $liste[$j] = $element_a_inserer;
                $element_a_inserer = $element_courant;
            }
        }
        $liste[$i] = $element_a_inserer;
    }
    return $liste;
}

$data = array("948308184","784412702","350410825","078370145","726729239","749848511","753823608",
    "033508920","050645944","107807877","840159453","536188949","699793360","686153313",
    "034268805","238004022","161440730","108484676","080651763","792962953","182631267");
print_r(Tri_insert($data));

$time_end = microtime(true);

$execution_time = ($time_end - $time_start);

echo 'Total Execution Time:'.$execution_time.' sec';