<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php

    $valorArray = "";
    $array = array();
    if (isset($_POST["array"])) {
        $array = explode(" ", $_POST["array"]);
    } else {


        //Crear array
        for ($i = 0; $i < 100; $i++) {
            $array[$i] = rand(0, 20);
        }
        //Mostrar array separado por espacios
        for ($i = 0; $i < 100; $i++) {
            echo " " . $array[$i];
            $valorArray .= $array[$i] . " ";
        }
    }
    ?>
    <br><br>
    <form method="post">
        <label for="num1">Ingresa el numero 1</label>
        <input type="number" name="num1">
        <br><br>
        <label for="num2">Ingresa el Numero 2</label>
        <input type="number" name="num2">
        <input type="hidden" name="array" value="<? echo $valorArray ?>">

        <br><br>
        <button type="submit">Enviar</button>
    </form>


    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["array"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];


        for ($i = 0; $i < 100; $i++) {
            if ($array[$i] == $num1) {
                $array[$i] = $num2;
            }
        }
        for ($i = 0; $i < 100; $i++) {
            echo " " . $array[$i];
        }
    }
    ?>
</body>

</html>