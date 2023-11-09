<?php
$datos=array();

for($i=0;$i<20;$i++){
    $numero=rand(0,100);
    $cuadrado=$numero*$numero;
    $cubo=$numero*$numero*$numero;
    $datos[$i]=array(
        "Numero"=> $numero,
        "Cuadrado"=> $cuadrado,
        "Cubo"=> $cubo

    );
}

    foreach($datos as $dato){
        echo "Numero:  " .$dato["Numero"] . " ,Cuadrado:  " .$dato["Cuadrado"] . ", Cubo: " . $dato["Cubo"] . "<br>";
    }

?>