<?php
    if($_POST){
        echo "il tuo nome: ". $_POST['username'];
        echo "<br>";
        echo "la tua casella di posta: ". $_POST['email'];
        echo "<br>";
    }
    else{
        echo "<form action=". $_SERVER['PHP_SELF'] ." method='POST'>";
?>

<table border=0>
<tr><td>nome utente:
    <td><input type="text" name="username"><br>
<tr><td>email:
    <td><input type="text" name="email"><br>    
</table>
<input type="submit" value="invio dei dati">
</form>
</body>
<?php
    }
?>
</html>
