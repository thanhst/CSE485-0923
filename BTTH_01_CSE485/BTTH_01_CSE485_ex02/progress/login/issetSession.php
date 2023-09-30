<?php
   session_start();
   if(!isset($_SESSION['isLogin'])){
    $loginPath="../screen/login.php";
    header("Location:". $loginPath);
   }
?>
