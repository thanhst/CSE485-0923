<?php
$localhost = "localhost";
$username = "root";
$password = "thanhxk2003";
$dbname = "btth01_cse485";
global $connect;
try {
    $connect = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed because : " . $e->getMessage();
}
