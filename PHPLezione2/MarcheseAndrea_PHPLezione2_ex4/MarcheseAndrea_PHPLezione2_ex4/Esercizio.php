<!DOCTYPE>
<HTML>
<?php

    function myOp() {
        $n = array();
        for($i = 0; $i < func_num_args(); $i++) {
            array_push($n,func_get_arg($i));
            if($i == 3){
                break;
            }
        }

        for($i = 0; $i<count($n); $i++){
            if($i == 0){
                echo "log10 di ".$n[0]." = ".log10($n[0]);
            }elseif($i == 1){
                echo "<BR>".$n[1]."^4 = ".pow($n[1], 4);
            }else{
                echo "<BR>".$n[2]."^3 = ".pow($n[2], 3);
            }
        }
    }
    myOp(3,5,78)
    ?>
<HTML>