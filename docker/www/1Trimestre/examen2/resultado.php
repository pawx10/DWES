<?php
session_start();
//Juego cartas
//@author Pablo Arroyo

$_SESSION['jugador1'] = obtenerCarta();
$_SESSION['jugador2'] = obtenerCarta();


header('Location: index.php');
exit();

function obtenerCarta() {
    $simbolos = ['c', 'd', 'p', 't'];
    $numeros = range(1, 10);
    $simboloAleatorio = $simbolos[array_rand($simbolos)];
    $numeroAleatorio = $numeros[array_rand($numeros)];
    return $simboloAleatorio . $numeroAleatorio . '.svg';
}
?>
