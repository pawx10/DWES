<?php
//Funciones

//Capicua
function esCapicua($num){
    $numInvertido=strrev($num); 
    if($num==$numInvertido){
        return true;
    }else{
        return false;
    }
}

//Primo
function esPrimo($num){
    for($i=2;$i*$i<=$num;$i++){
        if($num%$i==0){
            return false;
        }
    }
    return true;
}

//Siguiente primo
function siguientePrimo($num){
    do{
        $num++;
    }while(!esPrimo($num));
    return $num;
}

//Potencia 
function potencia($base,$exp){
    $resultado=$base*$exp;
    return $resultado;
}

//Digitos
function digitos($num){
    return (strlen($num));
}

//Voltea
function voltea($num){
    return strrev($num);
}

//DigitoN
function digitoN($num,$poscicion){
    return intval(strval($num[$poscicion]));
}

//Posicion de digito
function posicionDeDigito($num,$digito){
    $digitoAtexto=strval($num);
    for($i= 0;$i<strlen($digitoAtexto);$i++){
        if ($digitoAtexto[$i]==strval($digito)){
            return $i;
        }
          
        }
        return -1;
    }

//Quita por detras
function quitaPorDetras($num,$digito){
$numString=strval($num);
$numModificado=substr($numString,0,-1*$digito);
return intval($numModificado);
}


//Quita por delante
function quitaPorDelante($num,$digito){
$numString=strval($num);
$numModificado=substr($numString,1*$digito);
return intval($numModificado);

}

//Pega por delante
function pegaPorDetras($num,$digito){
$numModificado=(string)$num. (string)$digito;
return intval($numModificado);
}



//Pega por delante
function pegaPorDelante($num,$digito){
$numModificado=(string)$digito. (string)$num;
return intval($numModificado);
}

//trozoDeNumero

function trozoDeNumero($num,$inicio,$fin){
$numString=strval($num);
$trozo=substr($numString,$inicio,$fin-$inicio+1);
return intval($trozo);


}

//JuntaNumeros
function juntaNumeros($num1,$num2){
 return intval((string)$num1.(string)$num2);
}


//Decimal a Binario
function decimalBinario($num){
    if($num< 0 || !is_int($num)){
        return("No sirve");
}

if($num==0){
    return("0");
}
$binario="";
while($num> 0){
    $resto=$num%2;
    $binario.=$resto.$binario;
    $num=(int)($num/2);
}
return $binario;
}

//Binario a decimal

function binarioDecimal($num){
    $longitud=strlen($num);
    $decimal=0;

    for($i=$longitud-1;$i>=0;$i--){
        $bit=$num[$i];
        $decimal+=intval($bit)*pow(2,($longitud-1-$i));
    }
    return $decimal;
}







//Arrays 1 dimension
function generaArray($n,$min, $max){
    $array=array();
    for($i= 0; $i<$n; $i++){
        $array[]=rand($min,$max);
    }
    return $array;
}


//Minimo array 
function minimoArray($array){
    $minimo=$array[0];
    foreach($array as $num){
        if($num<$minimo){
            $minimo=$num;
    }
}
    return $minimo;
}

//Maximo array
function maximoArray($array){
    $maximo=$array[0];
    foreach($array as $num){
        if($num>$maximo){
            $maximo=$num;
}
    }
    return $maximo;
}

//Media Array
function mediaArray($array){

    $suma=array_sum($array);
    $media=$suma/count($array);
    return $media;
  
}



//Esta en Array
function estaEnArray($array,$num){
    $longitud=count($array);
    for($i= 0; $i<$longitud; $i++){
        if($num==$array[$i]){
            return true;
        }
            
        }
        return false;
}



//Posicion en Array
function posicionEnArray($array,$num){
    $longitud=count($array);
    for($i= 0; $i<$longitud; $i++){
        if($num==$array[$i]){
            $posicion=$i;
            echo " <br> El numero $num esta en la posicion $posicion";
        
    }

}
}

//Voltea Arrauy
function volteaArray($array){
    return array_reverse($array);
}



//Rotar a la derecha
function rotaDerechaArray($array,$posiciones){
    $n=count($array);
    $posiciones=$posiciones%$n;
    for($i= 0; $i<$posiciones; $i++){
        $elemento=array_pop($array);
        array_unshift($array,$elemento);
}
return $array;  
}


//Rotar A la izquierda
function rotaIzquierdaArray($array,$posiciones){
    $n=count($array);
    $posiciones=$posiciones%$n;
    for($i=$n; $i>$posiciones; $i--){
        $elemento=array_pop($array);
        array_unshift($array,$elemento);

}
return $array;
}

//$posiciones=1;
//$array=generaArray(15,1,20);
//print_r($array);
//echo"<br>";
//$arrayInvertido=rotaIzquierdaArray($array,$posiciones);
//print_r($arrayInvertido);