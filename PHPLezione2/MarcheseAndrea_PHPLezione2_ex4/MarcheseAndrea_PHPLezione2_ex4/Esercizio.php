<!DOCTYPE>
<HTML>
<?php

    function myOp($a, $b = null, $c = null) {
        if($c != null){
            echo "log10 di $a = ".log10($a)."<BR>$b^4 = ".pow($b,4)."<BR>$c^3 = ".pow($c,3);
        }
        elseif($b != null){
            echo "log10 di $a = ".log10($a)."<BR>$b^4 = ".pow($b,4);
        }else{
            echo "log10 di $a = ".log10($a);
        }
    }
    
    myOp(3)
    ?>
<HTML>
