<?php
   session_start();
   if(!isset($_SESSION['isLogin'])){
    $loginPath="../screen/login.php";
    header("Location:". $loginPath);
   }
   if(isset($_POST['logout'])){
    header("Location: ../screen/logout.php");
    exit;
}
?>
