<?php
include("../Connect/connect.php");
function getUser($page, &$totalRecords, $email = null, $mobile = null)
{
    global $conn;
    $limit = 10;
    $offset = ($page - 1) * $limit;
    $sqlTotalRecords = "SELECT COUNT(*) as total FROM User";
    if ($email !== null && $mobile !== null) {
        $sqlTotalRecords .= " WHERE Email = '$email' AND Mobile = '$mobile'";
    }
    $resultTotalRecords = mysqli_query($conn, $sqlTotalRecords);
    $rowTotalRecords = mysqli_fetch_assoc($resultTotalRecords);
    $totalRecords = $rowTotalRecords['total'];
    $totalRecords = ceil($totalRecords / $limit);
    $sql = "SELECT * FROM User";
    if ($email !== null && $mobile !== null) {
        $sql .= " WHERE Email = '$email' AND Mobile = '$mobile'";
    }
    $sql .= " LIMIT $offset, $limit";
    $results = mysqli_query($conn, $sql);
    return $results;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Email']) && isset($_POST['Mobile'])) {
    $email = $_POST['Email'];
    $mobile = $_POST['Mobile'];
} else {
    $email = null;
    $mobile = null;
}
$totalRecords = 0;
if (isset($_GET['page']) && $_GET['page'] > 1) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$results = getUser($page, $totalRecords, $email, $mobile);
$conn->close();
