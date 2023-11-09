<?php  

$num1=$_POST["num1"];
$operador=$_POST["operador"];
$num2=$_POST["num2"];

switch ($operador) {
    case "suma":
        $resultado=$num1+$num2;
        echo $resultado;
        break;

    case "resta":
        $resultado=$num1-$num2;
        echo $resultado;
        break;
    
    case "multiplicacion":
        $resultado=$num1*$num2;
        echo $resultado;
        break;

    case "division":
        $resultado=$num1/$num2;
        echo $resultado;
        break;
        
        default:
        echo"Sa rallao";
}


?>