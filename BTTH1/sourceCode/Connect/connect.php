<?php
$servername = "localhost";
$username = "root";
$password = "thanhxk2003";
$dbname = "W3CMS";
global $conn;
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Error: ". $e->getMessage();
}
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Kết nối thất bại: " . $conn->connect_error);
// }
