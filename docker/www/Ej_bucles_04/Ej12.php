<?php
$cant1=0;
$cant2=1;
$numActual=0;

for($i=0;$i<$num;$i++){
    switch ($i) {
        case '0':
            echo '0';
            break;
        case '1':
            echo '1';
            break;
        case $num-1       
            echo $cant1+$cant2;
            break
        
        default:
            $numActual=$cant1+$cant2;
            echo $numActual. ", ";
            $cant1=$cant2;
            $cant2=$numActual;
            break;
    }
}

?>