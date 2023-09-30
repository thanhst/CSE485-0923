<?php
include("../Connect/connect.php");
$email = "";
$mobile = "";
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['Email']) && isset($_GET['Mobile'])) {
    $email = $_GET['Email'];
    $mobile = $_GET['Mobile'];
}
$sqlTotalRecords = "SELECT COUNT(*) as total FROM User";
if ($email !== "" && $mobile !== "") {
    $sqlTotalRecords .= " WHERE Email = '$email' AND mobilephone = '$mobile'";
}
else if ($email !== "")
{
    $sqlTotalRecords .= " WHERE Email = '$email'";
}
else if($mobile !== "")
{
    $sqlTotalRecords .=" WHERE mobilephone = '$mobile'";
}
$resultTotalRecords = $conn->prepare($sqlTotalRecords);
$resultTotalRecords->execute();
$rowTotalRecords = $resultTotalRecords->fetch(PDO::FETCH_ASSOC);
$totalRecords = $rowTotalRecords['total'];
$totalRecords = ceil($totalRecords / 10);
if (isset($_GET['page']) && $_GET['page']>1 &&$_GET['page']<=$totalRecords) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$n = 10 * ($page - 1);
$sql = "SELECT * FROM User";
if ($email !== "" && $mobile !== "") {
    $sql .= " WHERE Email = '$email' AND mobilephone = '$mobile'";
}
else if ($email !== "") 
{
    $sql .= " WHERE Email = '$email'";
}
else if($mobile !== "")
{
    $sql .= " WHERE mobilephone = '$mobile'";
}
$sql .= " LIMIT $n, 10";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
$conn=null;
?>