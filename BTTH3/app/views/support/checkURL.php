<?php
$currentURL = $_SERVER['REQUEST_URI'];
$currentPage = '';

if (strpos($currentURL, 'trangchu') !== false || strpos($currentURL,'synthetic') !== false) {
    $currentPage = 'trangchu';
} elseif (strpos($currentURL, 'trangngoai') !== false) {
    $currentPage = 'trangngoai';
} elseif (strpos($currentURL, 'theloai') !== false || strpos($currentURL, 'addDataType') !== false || strpos($currentURL, 'editDataType') !== false||strpos($currentURL, 'category') !== false) {
    $currentPage = 'theloai';
} elseif (strpos($currentURL, 'tacgia') !== false) {
    $currentPage = 'tacgia';
} elseif (strpos($currentURL, 'baiviet') !== false|| strpos($currentURL,'post') !== false||strpos($currentURL, 'index.php') !== false) {
    $currentPage = 'baiviet';
} elseif (strpos($currentURL, 'index.php') !== false || $currentPage=="") {
    $currentPage = 'index';
} elseif (strpos($currentURL, 'login') !== false) {
    $currentPage = 'login';
}
?>