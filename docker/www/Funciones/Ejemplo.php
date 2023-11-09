<?php
$numero=$_POST['numero'];
if(isset($numero)){
?>
Introduzca un numero para saber si es primo o no <br>
<form action="numeroPrimoFuncion.php" method="post">
    <input type="number" name="numero" min="0" autofocus><br>
    <input type="submit" value="aceptar">
</form>

}