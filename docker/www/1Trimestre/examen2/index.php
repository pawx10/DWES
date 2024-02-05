<?php
session_start();
//Juego cartas
//@author Pablo Arroyo


function cogerrCarta() {
    $simbolos = ['c', 'd', 'p', 't'];
    $numeros = range(1, 10);
    $simboloAleatorio = $simbolos[array_rand($simbolos)];
    $numeroAleatorio = $numeros[array_rand($numeros)];
    return $simboloAleatorio . $numeroAleatorio . '.svg';
}


if (!isset($_SESSION['jugador1'])) {
    $_SESSION['jugador1'] = cogerrCarta();
}

if (!isset($_SESSION['jugador2'])) {
    $_SESSION['jugador2'] = cogerrCarta();
}


function decirGanador($cartaJugador1, $cartaJugador2) {
    $numeroJugador1 = intval(substr($cartaJugador1, 1, -4));
    $numeroJugador2 = intval(substr($cartaJugador2, 1, -4));

    if ($numeroJugador1 > $numeroJugador2) {
        return 'Jugador 1 Gana';
    } elseif ($numeroJugador1 < $numeroJugador2) {
        return 'Jugador 2 Gana';
    } else {
        return 'Empate';
    }
}


$ganador = decirGanador($_SESSION['jugador1'], $_SESSION['jugador2']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Cartas</title>
</head>
<body>
    <h1>Juego de Cartas</h1>
    
    <h2>Cartas de los Jugadores</h2>
    <div>
        <h2>J1</h2>
    <img src="cartas/<?php echo $_SESSION['jugador1']; ?>" width="110">
</div>
<div>
<h2>J2</h2>
    <img src="cartas/<?php echo $_SESSION['jugador2']; ?>" width="110">
</div>   
  
    <p><?php echo $ganador; ?></p>
    
    <form action="resultado.php" method="post">
        <input type="submit" value="Repetir Jugada">
    </form>
</body>
</html>
