<?php
$numero=array();
$cuadrado=array();
$cubo=array();

for($i=0;$i<20;$i++){
    $numero[$i]=rand(0,100);
}
    



    for($i=0;$i<20;$i++){
        $cuadrado[$i]=$numero[$i]*$numero[$i];
        $cubo[$i]=$numero[$i]*$numero[$i]*$numero[$i];
    }


    for ($i=0; $i <20 ; $i++) { 
        echo " Número:  " . $numero[$i] . " , Cuadrado:  " . $cuadrado[$i] . " , Cubo:  " . $cubo[$i] . "<br>";
    }

?>