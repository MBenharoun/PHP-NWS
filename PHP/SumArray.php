<?php
function SumArray($tabs = [])
{
    if(count($tabs) === 0){
        return 0;
    }
    $n = $tabs[0];
    array_shift($tabs);
    if ($n > 0)
        {
          return $n + SumArray($tabs);
         } else {
          return SumArray($tabs);
        }
}

 echo SumArray([0,-2,3]);
