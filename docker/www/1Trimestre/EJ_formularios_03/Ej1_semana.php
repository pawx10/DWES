<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Asignaturas</title>
</head>
<body>
    <h1>Consulta de Asignaturas</h1>
    <form method="get" action="respuesta.php">
        <label for="dia">Selecciona un día de la semana:</label>
        <select name="dia" id="dia">
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miércoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
            <option value="sabado">Sábado</option>
            <option value="domingo">Domingo</option>
        </select>
        <button type="submit">Consultar</button>
    </form>
</body>
</html>
