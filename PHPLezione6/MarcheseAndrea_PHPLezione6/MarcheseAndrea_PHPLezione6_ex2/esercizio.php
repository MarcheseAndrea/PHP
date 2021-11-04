<?php
    $n1 = $_POST["numero1"];
    $op = $_POST["op"];
    $n2 = $_POST["numero2"];
    $result;

    switch($op){
        case('+'):
            $result = $n1+$n2;
            break;
        case('-'):
            $result = $n1-$n2;
            break;
        case('*'):
            $result = $n1*$n2;
            break;
        case('/'):
            $result = $n1/$n2;
            break;
        case('^'):
            $result = pow($n1,$n2);
            break;
    }

    echo "risultato: $result";
?>