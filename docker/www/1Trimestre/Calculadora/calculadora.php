<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form method="post" action="">
        <label for="num1">Introduzca el numero 1</label>
    <input type="number" name="num1" id="num1">
    <br><br>
    <select name="operador" id="operador">
        <option value="suma">+</option>
        <option value="resta">-</option>
        <option value="multiplicacion">*</option>
        <option value="division">/</option>
    
    </select>
    <br> <br>
        <label for="num2">Indroduza el numero 2</label>
        <input type="number" name="num2" id="num2">
        <br><br>
        <button type="submit">Calcular</button>
        <br><br>
       
    </form>
 
    <?php  
    
    // if (isset($_POST["calcular"])) {
$resultado="";
$num1=$_POST["num1"];
$operador=$_POST["operador"];
$num2=$_POST["num2"];

switch ($operador) {
    case "suma":
        $resultado=$num1+$num2;
        
        break;

    case "resta":
        $resultado=$num1-$num2;
        
        break;
    
    case "multiplicacion":
        $resultado=$num1*$num2;
        
        break;

    case "division":
        $resultado=$num1/$num2;
       
        break;
        
        default:
        echo"Sa rallao";
}
    echo $resultado;
   //  }
?>

</body>
</html>

