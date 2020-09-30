    <?php
    function MyReapeat($chaine,$i)
    {
        $a = 1;
        while ($a < ($i + 1))
        {
            echo ($chaine);
            $a = $a + 1;
        }
    }
    MyReapeat("Bonjour",10);