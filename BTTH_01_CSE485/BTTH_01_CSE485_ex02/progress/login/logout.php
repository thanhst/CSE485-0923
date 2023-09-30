<?php
  session_start(); // Bắt đầu session
  // Ngắt kết nối session nếu nhấp vào nút Logout
  if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['logout'])) {
    // Xóa tất cả các biến session
    // Hủy bỏ session hiện tại bằng cách xóa tất cả các cookie session
    session_unset();
    // Hủy bỏ session
    session_destroy();

    // Chuyển hướng đến trang đăng nhập
    header("Location: ../../screen/login.php");
    exit;
  }
?>