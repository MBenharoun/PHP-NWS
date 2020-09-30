<?php
function verificationPassword(){
    $uppercase = preg_match('@[A-Z]@',Lowkey956) ;
    $lowercase = preg_match('@[a-z]@',Lowkey956) ;
    $numbercase = preg_match('@[0-9]@',Lowkey956);

    if (strlen(LowKey956) < 7 && ($uppercase && $lowercase && $numbercase)){
            return true;
    }
    else {
    return false;

    }
} 

?>