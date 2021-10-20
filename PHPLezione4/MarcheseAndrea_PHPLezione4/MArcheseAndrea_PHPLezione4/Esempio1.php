<?php

    $vet[] = 0;

    for($i = 0; $i<20; $i++){
        $vet[$i]=(int) rand(1,100);
    }
    echo "Stampa con ciclo<BR>";
    $c = count($vet);
    echo "Numero elementi presenti nel vettore: $c <p>";
    for($i=0;$i<$c;$i++){
        echo $vet[$i].": ";
    }
    echo "<HR>";
    echo "Stampa con print_r<BR>";
    print_r($vet);
?>