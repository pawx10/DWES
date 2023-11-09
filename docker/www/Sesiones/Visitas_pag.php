<?php
session_start();
if (isset($_POST["reset"])){
    session_destroy();
    header("Location:Visitas_pag.php ");

}
if(!isset($_SESSION["count"])){
$_SESSION["count"]=0;

}else{
    $_SESSION["count"]++;

}

echo "Has visitado esta pagina ".$_SESSION["count"]." veces";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>