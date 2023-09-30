<?php
include("../connect/connect.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM (Baiviet join theloai on baiviet.ma_tloai=theloai.ma_tloai) join tacgia on baiviet.ma_tgia=tacgia.ma_tgia where baiviet.ma_bviet=?";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(1,$id,PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() > 0)
    {
        $result=$stmt->fetch();
    }
    else{
        header("Location:http://localhost/BTTH_01_CSE485/BTTH_01_CSE485_ex02/screen/index.php");
    }
}
else{
    header("Location:http://localhost/BTTH_01_CSE485/BTTH_01_CSE485_ex02/screen/index.php");
}
?>