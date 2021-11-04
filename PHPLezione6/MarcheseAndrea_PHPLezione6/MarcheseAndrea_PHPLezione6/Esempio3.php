<?php
    echo "<form method='post' action=".$_SERVER['PHP_SELF'].">
    <table width=30%>
    <tr>
    <td>Primo numero
    <td><input type='text' name='n1'>
    <tr>
    <td>secondo numero
    <td><input type='text' name='n2'>
    <center>
    <tr>
    <td><input type='reset' value='Azzera'>
    <td><input type='submit' name='inviato' value='minore'>
    </table>
    </form>";

    if(isset($_POST['n1']) && isset($_POST['n2'])){
        if($_POST['n1']<$_POST['n2']){
            $min=$_POST['n1'];
        }else{
            $min=$_POST['n2'];
        }
        echo "il numero minore è: $min";
    }
    else{
        echo "Inserisci i valori nel form";
    }
?>