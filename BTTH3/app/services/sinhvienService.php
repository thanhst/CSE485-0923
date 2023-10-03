<?php
require_once(APP_ROOT . "/app/model/sinhvien.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class SinhvienService{
    public function addSinhvien($name,$author,$idCategory)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM baihat where tenbaihat=?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $name);
            $stmt->execute();
            if( $stmt->rowCount() == 0) {
                $sql = "INSERT INTO baihat values(?,?,?,)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $name);
                $stmt->bindParam(2, $author);
                $stmt->bindParam(3, $idCategory);
                $stmt->execute();
                return true;
            }
        }
        return false;
    }
    public function getAllSinhvien()
    {

        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM sinhvien";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $sinhvienArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $row) {
                    $sinhvien = new Sinhvien($row["id"], $row["tenbaihat"], $row["casi"], $row["idtheloai"]);
                    $sinhvienArr[] = $sinhvien;
                }
            }
            return $sinhvienArr;
        }
    }
}
