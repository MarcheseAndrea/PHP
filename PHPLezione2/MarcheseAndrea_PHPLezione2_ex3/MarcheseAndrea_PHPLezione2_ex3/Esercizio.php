<!DOCTYPE html>
<html>
    <?php
        function operazione($a, $b, $op){
            if(is_numeric($a) && is_numeric($b) && in_array($op, array('+','-','*','/'))){
                echo "$a $op $b = ".eval("return $a $op $b;");;
            }else{
                echo "ERRORE DI SINTASSI";
            }
        }

        operazione(6,9,'+');
    ?>
</html>