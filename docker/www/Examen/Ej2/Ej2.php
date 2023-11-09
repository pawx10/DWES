<?php
$horarioClases = array(//Creamos array
    "lunes" => array(
        "Desarrollo Cliente" => "15:15 - 18:15",
        "Desarrollo Servidor" => "18:30 - 21:30"
     ),
      "martes" => array(
        "Desarrollo" => "15:15 - 18:15",
        "Despliegue de aplicaciones" => "18:30 - 21:30"
    ),
    "miercoles" => array(
        "Desarrollo" => "15:15 - 18:15",
        "Desarrollo cliente" => "18:30 - 20:30",
        "Empresas" => "20:30 - 21:30"
    ),
    "jueves" => array(
        "Desarrollo servidor" => "15:15 - 18:15",
        "Empresas" => "18:30 - 21:30"
    ),
    "viernes" => array(
        "Diseño" => "15:15 - 18:15",
    "Libre configuracion" => "18:30 - 21:30"
    ),
);

$dia = "lunes";
$clase = "Desarrollo Servidor"; 
$horario = $horarioClases[$dia][$clase];

echo "La clase $clase es el $dia de: $horario";//Imprime horario del dia y clase seleccionados
?>





