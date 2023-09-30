<?php
include("../Connect/connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
    $requestData = json_decode(file_get_contents('php://input'), true);

    $username = $requestData['username'];
    $sql = "SELECT COUNT(*) AS count FROM User WHERE username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $exists = ($row['count'] > 0);
    $response = array('exists' => $exists);
    header('Content-Type: application/json');
    echo json_encode($response);
}

$conn->close();
?>