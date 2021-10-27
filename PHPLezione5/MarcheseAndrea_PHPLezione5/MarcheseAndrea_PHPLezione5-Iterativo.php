<?php

    $input = 10;
    //a3 = 3*a2 - a1

    //a = x - y

    function calcoloIterativo($ai){
        $a = array(0, 3, 9);
        for($i=3; $i<$ai; $i++){
            array_push($a, 3*$a[$i-1] - $a[$i-2]);
        }
        echo print_r($a);
    }

    calcoloIterativo($input);
?>