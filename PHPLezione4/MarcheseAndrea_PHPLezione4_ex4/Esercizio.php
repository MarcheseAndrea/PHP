<?php
    function arrayAggioranto($inputCognome, $inputNome, $array){
        $array[$inputCognome] = $inputNome;
        return $array;
    }

    $inputCognome = "Rossi";
    $inputNome = "Gianfiliberto";
    $myList = array('Indietro' => 'Pietro');

    $myList = arrayAggioranto($inputCognome, $inputNome, $myList);


    foreach ($myList as $key => $value){
        echo "Il nome di $key è $value<BR>";
    }

?>