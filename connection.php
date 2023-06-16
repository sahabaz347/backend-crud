<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET,POST,OPTIONS,DELETE,PUT");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


$conn = new mysqli($servername, $username, $password, $dbname);
?>