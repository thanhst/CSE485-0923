<?php
include("../connect/connect.php");
$sql = "SELECT * FROM Baiviet ORDER by hinhanh DESC limit 8";
$stmt = $connect->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
?>