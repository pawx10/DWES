<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados</h1>
   
    <?php
        
        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        $suma = $num_1 + $num_2; //suma
        $resta = $num_1 - $num_2; //resta
        $multiplicacion = $num_1 * $num_2; //multiplicacion
        $division = $num_1 / $num_2; //division

        echo "<h2>Suma</h2> <br>"; 
    echo "El resultado de la suma es: " .$suma;
        echo "<h2>Resta</h2> <br>"; 
    echo "El resultado de la resta es: " .$resta;
        echo "<h2>Multiplicacion</h2> <br>";
    echo "El resultado de la multiplicacion es: " .$multiplicacion;
         echo "<h2>Division</h2> <br>"; 
    echo "El resultado de la division es: " .$division;
    ?>

</body>
</html>