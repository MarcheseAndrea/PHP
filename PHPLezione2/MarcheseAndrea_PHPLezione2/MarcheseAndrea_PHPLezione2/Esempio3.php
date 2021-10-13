<!DOCTYPE html>
<html>
    <?php

        function chiama($nome = "nessuno"){
            echo "il mio nome è: ".$nome;
            echo "<br>";
            
            return;
        }

        chiama();
        chiama("testo di prova");
    ?>
</html>