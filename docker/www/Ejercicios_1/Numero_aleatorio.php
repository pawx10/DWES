<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numero aleatorio entre 1 y 1000</h1>
    <?php
    $min=0;
    $max=1001;
    $random_int=random_int($min, $max);
    echo "el numero aleatorio es $random_int.";
?>

</body>
</html>