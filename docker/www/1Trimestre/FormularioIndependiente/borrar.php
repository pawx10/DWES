<?php
include("functions/functions.php");
session_start();

session_destroy();
homeButton("index.html");
?>