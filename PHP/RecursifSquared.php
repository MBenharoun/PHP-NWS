
<?php
    function SumSquared($max)
    {
        if ($max === 0) {
            return 0;
        } else {
            return ($max * $max) + SumSquared($max - 1);
}
    }
   echo SumSquared(10);
?>