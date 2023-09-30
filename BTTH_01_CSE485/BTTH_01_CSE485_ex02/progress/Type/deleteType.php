<?php
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    include("../../connect/connect.php");
    $sql="SELECT * FROM THELOAI WHERE ma_tloai=?";
    $stmt= $connect->prepare($sql);
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    if($stmt->rowCount()>0){
        $sqlDelete="DELETE FROM THELOAI WHERE ma_tloai=?";
        $stmt= $connect->prepare($sqlDelete);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location:../../screen/theloai.php?deleteSuccess={$id}");
    }
    else{
        header("Location:../../screen/theloai.php");
    }
}
else{
    header("Location:../../screen/theloai.php");
}
?>