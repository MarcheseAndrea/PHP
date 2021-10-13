<HTML>
    <HEAD>
        <TITLE>ESEMPIO 2</TITLE>
</HEAD>
    <BODY>
    <?php
        $somma = 0;
        echo "<TABLE BORDER=1><TR>";
        while($somma<90){
            $numeroCasuale = rand(1,6);
            echo "<TD>$numeroCasuale</TD>";
            $somma += $numeroCasuale;
        }
        echo "</TABLE>";
        echo "<BR>Somma totale: $somma";
        ?>

    </BODY>
</HTML>