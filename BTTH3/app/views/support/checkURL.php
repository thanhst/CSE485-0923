<?php
$currentURL = $_SERVER['REQUEST_URI'];
$currentPage = '';

if (strpos($currentURL, 'trangchu') !== false || strpos($currentURL,'synthetic') !== false) {
    $currentPage = 'trangchu';
} elseif (strpos($currentURL, 'trangngoai') !== false) {
    $currentPage = 'trangngoai';
} elseif (strpos($currentURL, 'class') !== false || strpos($currentURL, 'addDataType') !== false || strpos($currentURL, 'editDataType') !== false||strpos($currentURL, 'category') !== false) {
    $currentPage = 'lop';
} elseif (strpos($currentURL, 'student') !== false|| strpos($currentURL,'') !== false||strpos($currentURL, 'index.php') !== false) {
    $currentPage = 'sinhvien';
} elseif (strpos($currentURL, 'index.php') !== false || $currentPage=="") {
    $currentPage = 'index';
} elseif (strpos($currentURL, 'login') !== false) {
    $currentPage = 'login';
}
?>