<?php
funcition createConnection() {
    $host="db";
    $dbUname="root";
    $dbPassword="test";
    $dbName="gestclient";
    $conn=new PDO("mysql:host=$host, dbName=$dbName"$dbUname,$dbPassword);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}

function createClient(){
    
    $dni=$_GET['dni'];
    $name=$_GET['name'];
    $address=$_GET['address'];
    $phone=$_GET['phone'];

    $checkIfExistsQuery="SELECT * FROM client WHERE dni='$dni'";
    $checkStmt=$conn ->prepare($checkIfExistsQuery);
    $checkStmt->bindParam(':dni', $dni);
    $checkStmt->execute();
    $result=$checkStmt->fetch(PDO::FETCH_ASSOC);

    if($result["count"] >0) {
        displayError("el dni ya existe en la base de datos");
        return;
    }

$sql="UPDATE client SET  name=':name', address=':address', phone=':phone' WHERE dni=2";
$stmt=$conn -> prepare($sql);
$stmt ->bindParam(":dni",$dni);
$stmt ->bindParam(":name",$name);
$stmt ->bindParam(":address",$address);
$stmt ->bindParam(":phone",$phone);

try{ 
    $stmt ->execute();
}catch(PDOException $e){
    displayError("eror al crear el cliente" . $e ->getMessage();)
}
}

function modifyClient() {
    $dni=$_GET['dni'];
    $name=$_GET['name'];
    $address=$_GET['address'];
    $phone=$_GET['phone'];
     try{
        $query="INSERT INTO client(dni,name,address,phone)(VALUES(:dni,:name,:address,:phone)";
     }
}
?>