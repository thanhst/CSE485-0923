<?php
include("../../connect/connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["typeID"]) && isset($_POST["typeName"]))
    {
        $id=$_POST["typeID"];
        $name=trim($_POST['typeName']);
        $sql="SELECT * FROM theloai where ten_tloai = ? and ma_tloai<>?";
        $stmt= $connect->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$id);
        $stmt->execute();
        if($stmt->rowCount()>0){
            header("Location:../../screen/editDataType.php?exist=$name&id=$id");
        }
        else{
            $sql="UPDATE theloai SET ten_tloai=? where ma_tloai=?";
            $stmt= $connect->prepare($sql);
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$id);
            $stmt->execute();
            header("Location:../../screen/theloai.php?editSuccess=$id");
        }
    }
    else{
        header("Location:../../screen/theloai.php");
    }
}
else{
    header("Location:../../screen/theloai.php");
}
?>