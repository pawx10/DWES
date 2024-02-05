<?php
$sname="db";
$uname="root";
$password="test";

$db_name="login";
$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn) {
    echo "Connection failed!";
}

?>