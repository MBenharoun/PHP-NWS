<?PHP

function WorldFetcher($chaine1, $chaine2)
{
    $arg1 = 0;
    $arg2 = 0;
    $chaine1 ->array("bonheur");
    $chaine2 ->array("bhr");

     if($chaine1($arg1) == $chaine2($arg2))
    {
        $arg2++;
        return 1;
    }
     else{
    $arg1++ ;
    return 0;
     }

}

?>