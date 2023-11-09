<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $dia = $_GET["dia"];

      
        $asignaturas = [
            "lunes" => "Matemáticas",
            "martes" => "Ciencias",
            "miercoles" => "Historia",
            "jueves" => "Lengua",
            "viernes" => "Educación Física",
            "sabado" => "Descanso",
            "domingo" => "Descanso"
        ];

      
        if (array_key_exists($dia, $asignaturas)) {
            echo "<h2>Asignatura de primera hora el $dia: " . $asignaturas[$dia] . "</h2>";
        } else {
            echo "<h2>Día no válido</h2>";
        }
    }
    ?>
</body>
</html>
