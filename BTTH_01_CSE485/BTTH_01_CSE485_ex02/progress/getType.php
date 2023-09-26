<?php
include("../connect/connect.php");
$sql="SELECT * from theloai";
$stmt= $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>