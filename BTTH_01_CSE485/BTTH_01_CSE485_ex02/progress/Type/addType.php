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
            $sqlCheck="SELECT ma_tloai FROM theloai order by ma_tloai DESC";
            $check=$connect->prepare($sqlCheck);
            $check->execute();
            $result= $check->fetchAll();
            $id=$check->rowCount();
            $ma_tloai = array_column($result, 'ma_tloai');
            for($i=1;$i<=$id+1;$i++)
            {
                if(in_array($i,$ma_tloai)==false)
                {
                    $sql="INSERT INTO THELOAI(ma_tloai,ten_tloai) VALUES
                    (
                        ?,?
                    );";
                    $stmt=$connect->prepare($sql);
                    $stmt->bindParam(1,$i);
                    $stmt->bindParam(2,$name);
                    $stmt->execute();
                    header("Location:../../screen/theloai.php?addTypeSuccess={$i}");
                    exit();
                }
            }
        }
    }
    else{
        header("Location:../../screen/theloai.php");
    }
}
?>