<?php
$time_start = microtime(true);


Function Tri_Bulle($tableau)
{
    $N = count($tableau);
    for ($i = 0 ;$i < $N - 1;$i++)
    {
        for ($j = 0;$j < $N -1 -$i;$j++)
        {
            if ($tableau[$j] > $tableau[$j+1])
            {
                $h = $tableau[$j+1];
                $tableau[$j+1] = $tableau[$j];
                $tableau[$j]= $h ;

            }
        }
    }
    return $tableau;
}

$data = array("948308184","784412702","350410825","078370145","726729239","749848511","753823608",
    "033508920","050645944","107807877","840159453","536188949","699793360","686153313",
    "034268805","238004022","161440730","108484676","080651763","792962953","182631267");
print_r(Tri_Bulle($data));

$time_end = microtime(true);

$execution_time = ($time_end - $time_start);

echo 'Total Execution Time:'.$execution_time.' sec';


