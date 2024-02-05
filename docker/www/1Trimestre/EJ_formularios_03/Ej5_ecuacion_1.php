<?php
$a = $_POST["a"]; 
$b= $_POST["b"];
if ($a == 0) {
    if ($b == 0) {
        echo "La ecuación tiene infinitas soluciones.";
    } else {
        echo "La ecuación no tiene solución.";
    }
} else {
    // Calcular la solución para x
    $solucion = -$b / $a;
    echo "La solución para la ecuación {$a}x + {$b} = 0 es x = {$solucion}.";
}
?>
