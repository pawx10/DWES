<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array=array();
    for($i=0;$i<8;$i++){
        $array[$i]=(rand(0,50));
    }

    for($i= 0;$i< 8;$i++){
       if( $array[$i]%2!=0){
        echo'<span style="color:red;">' .$array[$i] ." ". '</span>';
       }else{
        echo'<span style="color:blue;">' .$array[$i] ." ". '</span>';
       }
    
    }

    ?>
</body>
</html>