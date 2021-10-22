<?php

    $array = array();
    $pari = 0;
    for($i = 0; $i<20; $i++){
        $n = rand(1,100);
        $array[$i] = $n;
        if($n % 2 == 0){
            $pari++;
        }
    }
    echo "In quest array da 20 numeri, $pari sono pari e ".count($array)-$pari." dispari";
?>