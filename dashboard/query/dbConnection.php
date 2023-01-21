<?php
$host = "localhost";
$dbUser = "root";
$dbpass = "";

$dbName = "andress_bonifacio_bims";
$conn;
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName",$dbUser,$dbpass);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "connectedd";
} catch (PDOException $th) {
    // echo "connection failed".$th->getMessage();
}


?>