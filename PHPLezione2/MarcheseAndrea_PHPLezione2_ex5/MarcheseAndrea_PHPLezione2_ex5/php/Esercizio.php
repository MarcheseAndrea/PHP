<!DOCTYPE html>
<html>
    <?php
        function showImg($n){
            echo "<img src='../immagini/$n.jpg'>";
        }

        showImg(rand(1,6));
    ?>
</html>