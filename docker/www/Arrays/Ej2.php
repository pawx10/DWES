<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$num4=$_POST["num4"];

$numeros=array($num1,$num2,$num3,$num4);
$maximo=max($numeros);
$minimo=min($numeros);

for($i=0;$i<4;$i++){
    echo "Numero " .$i. ": " .$numeros[$i]. "<br><br>";
}
  
    echo "Maximo: $maximo <br>";
    echo "Minimo: $minimo <br>";
?>