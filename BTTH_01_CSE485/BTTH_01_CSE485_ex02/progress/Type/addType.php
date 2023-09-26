<?php
include("../../connect/connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["typeName"])){
        $name=trim($_POST["typeName"]);
        $sql="Select * from theloai where ten_tloai=?";
        $stmt=$connect->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->execute();
        if($stmt->rowCount()>0){
            header("Location:../../screen/addDataType.php?exist={$name}");
        }
        else{
            $sqlCheck="SELECT * FROM theloai";
            $check=$connect->prepare($sqlCheck);
            $check->execute();
            $id=$check->rowCount() +1;
            $sql="INSERT INTO THELOAI(ma_tloai,ten_tloai) VALUES
            (
                ?,?
            );";
            $stmt=$connect->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->bindParam(2,$name);
            $stmt->execute();
            header("Location:../../screen/theloai.php?addTypeSuccess={$id}");
        }
    }
    else{
        header("Location:../../screen/theloai.php");
    }
}
?>