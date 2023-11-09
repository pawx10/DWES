<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array=array(
    "coche" => "car",
    "moto" => "motorbike",
    "casa" => "house",
    "perro" => "dog",
    "gato" => "cat",
    "ratón" => "mouse",
    "libro" => "book",  
    "pluma" => "pen",
    "mesa" => "table",
    "silla" => "chair",
    "sol" => "sun",
    "luna" => "moon",
    "agua" => "water",
    "fuego" => "fire",
    "tierra" => "earth",
    "aire" => "air",
    "manzana" => "apple",
    "naranja" => "orange",
    "pelota" => "ball",
    "pescado" => "fish"
    );
    foreach ($array as $Español => $Ingles) {
      echo "Español: " . $Español . ", Ingles: " . $Ingles . "<br>";
  }
  ?>
</body>
</html>
