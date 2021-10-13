<!DOCTYPE html>
<html>
    <?php
        $nome1 = "cognome: ";
        $nome2 = "nome: ";
        $nome3 = "indirizzo: ";
        $nome4 = "cap: ";
        $nome5 = "citta: ";
        $nome6 = "regione: ";
        $nome7 = "provincia: ";
        $nome8 = "telefono: ";
        $nome9 = "fax: ";
        $nome10 = "codice: ";

        echo "<FORM ACTION='pippo.php'><TABLE WIDTH=35%><TR>";
        for($i = 1; $i < 11; $i++){

            $temp = "nome$i";
            $valore = $$temp;

            echo "<TR><TD>".$valore."<TD><INPUT TYPE='text' NAME='nome$i' VALUE='$valore'<TD>"; 
        }
    ?>
</html>