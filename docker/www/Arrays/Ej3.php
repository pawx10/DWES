<?php
$normal=array();
$volteado=array();
//Crear array normal
for($i=0;$i<15;$i++){
    $normal[$i]=rand(0,100);

}
//Voltearlo
for($i=0;$i<15;$i++){
    $volteado[($i+1)%15]=$normal[$i];
}


//Mostrar array normal

echo "Array normal:<br>";
for($i=0;$i<15;$i++){
    echo $normal[$i]." ";
}
echo "<br><br>";
//Mostrar array volteado 
echo "Array Volteao:<br>";
for($i=0;$i<15;$i++){
    echo $volteado[$i]." ";
}


?>