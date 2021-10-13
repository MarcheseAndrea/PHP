<HTML>
    <HEAD>
        <meta charset="UTF-8 Latin Extended A">
        <TITLE>ESERCIZIO</TITLE>
    </HEAD>

    <BODY>
        <table style="border: 3px solid blue;">
        <?php
            $n = 0;
            for($i=0; $i<20; $i++){             //RIGA
                echo "<TR>";
                for($j = 0; $j<20; $j++){       //COLONNA
                    $n+=3;
                    echo "<TD>".$n."</TD>";
                }
                echo "</TD>";
            }
            ?>
        </table>

    </BODY>
</HTML>