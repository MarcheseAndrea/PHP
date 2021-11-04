<?php
    $me = $_SERVER['PHP_SELF'];

    if($_GET){
        echo "marca selezionata: ".$_GET['marca']."<br>";
        echo "modello selezionata: ".$_GET['modello']."<br>";
    }else{
        echo "<a href=".$me."?marca=Fiat&modello=Panda>Panda</a><br>
        <a href=".$me."?marca=AlfaRomeo&modello=Giulietta>Giulietta</a><br>
        <a href=".$me."?marca=Opel&modello=Panda>Opel astra</a><br>
        <a href=".$me."?marca=Citroen&modello=ps4>Citroen ps4</a><br>
        <a href=".$me."?marca=Ford&modello=Ka>Ford Ka</a><br>";

    }
?>