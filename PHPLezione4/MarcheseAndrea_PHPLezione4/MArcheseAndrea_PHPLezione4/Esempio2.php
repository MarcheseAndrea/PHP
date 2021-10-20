<?php

    function nazione_per_citta($vet, $citta){
        if(isset($vet[$citta])){
            echo "la città: $citta è in: ".$vet[$citta];
            echo "<HR>";
        }
    }
    function citta_per_nazione($vet, $nazione){
        if($a=array_search($nazione,$vet)){
            echo "la capitale della $nazione è in: $a";
        }else{
            echo "nazione non trovata";
        }
        echo "<HR>";
    }
    function stampa_tutto($vet){
        reset($vet);
        $tmp = current($vet);
        if($tmp){
            echo "$tmp<BR>";
            while($tmp = next($vet)){
                echo "$tmp<BR>";
            }
        }
        else{
            echo "array vuoto";
        }
        echo "<HR>";
    }

    $info=array('Mandrid'=>'Spagna','Roma'=>'Italia','Londra'=>'Regno Unito','Berlino'=>'Germania','Parigi'=>'Francia');
    citta_per_nazione($info, 'Regno Unito');
    nazione_per_citta($info, 'Roma');
    stampa_tutto($info);
?>