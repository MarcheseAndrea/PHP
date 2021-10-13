<!DOCTYPE html>
<html>
    <HEAD>
        <?php
            function passaValore($numero1, $numero2){
                $numero1 = $numero1+100;
                $numero2 = $numero2+100;
            }

            function passaIndirizzo(&$numero1, &$numero2){
                $numero1 = $numero1+100;
                $numero2 = $numero2+100;
            }
        ?>
    </HEAD>
    <BODY>
        <?php
            $a = 20;
            $b = 30;
            echo "<BR> Prima della chiamata a passaValore<BR>";
            echo "$a, $b<BR>";
            passaValore($a, $b);
            echo "<BR> Dopo della chiamata a passaValore<BR>";
            echo "$a, $b<BR>";
            echo "<BR> Prima della chiamata a passaIndirizzo<BR>";
            echo "$a, $b<BR>";
            passaIndirizzo($a,$b);
            echo "<BR> Dopo della chiamata a passaIndirizzo<BR>";
            echo "$a, $b<BR>";
        ?>
    </BODY>
</html>