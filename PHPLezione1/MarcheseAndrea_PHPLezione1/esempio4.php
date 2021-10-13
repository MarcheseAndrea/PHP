<HTML>
    <HEAD>
        <meta charset="UTF-8 Latin Extended A">
        <TITLE>ESEMPIO 4</TITLE>
    </HEAD>

    <BODY>
    <?php
        echo "<TABLE WIDTH=30%><TR>";
        for($i = 32; $i < 256; $i++){
            echo "<TD>".chr($i);
            if(($i%16)==0){
                echo "<TR>";
            }
        }
        ?>

    </BODY>
</HTML>