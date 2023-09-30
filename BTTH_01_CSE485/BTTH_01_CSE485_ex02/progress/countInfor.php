<?php
include("../connect/connect.php");
$sqlInfor="SELECT count(*) from user";
$stmt= $connect->prepare($sqlInfor);
$stmt->execute();
$user = $stmt->fetch();
$sqlBaiviet="SELECT count(*) from baiviet";
$stmt= $connect->prepare($sqlBaiviet);
$stmt->execute();
$baiviet = $stmt->fetch();
$sqlTacgia="SELECT count(*) from tacgia";
$stmt= $connect->prepare($sqlTacgia);
$stmt->execute();
$tacgia = $stmt->fetch();
$sqlTheloai="SELECT count(*) from theloai";
$stmt= $connect->prepare($sqlTheloai);
$stmt->execute();
$theloai = $stmt->fetch();
?>
