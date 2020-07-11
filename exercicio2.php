<?php
    $menor = mmc(1);

    function mmc($x){
        if($x%2==0 && $x%3==0 && $x%10==0){
            return $x;
        }
        return mmc($x+1);
    }

    print $menor;
?>
