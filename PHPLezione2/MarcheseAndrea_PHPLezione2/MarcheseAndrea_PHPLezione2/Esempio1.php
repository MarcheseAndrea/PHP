<!DOCTYPE html>
<html>
    <?php

        $b = "valore iniziale";
        function provaScope(){
            $a = true;
            if($a){
                $b = "attualmente";
            }
        }
        if(isset($b)){
            echo $b;
        }
        else{
            echo "variabile non visibile!";
        }
    ?>
</html>