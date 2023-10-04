<?php
require_once(APP_ROOT . "/app/model/category.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class CategoryService{
    public function getAllCategory(){

            $dbConnection = new DBconnection();
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "SELECT * FROM baiviet";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $cateArr = [];
                if ($stmt->rowCount() > 0) {
                    foreach ($stmt->fetchAll() as $row) {
                        $cate =0;
                        $cateArr[] = $cate;
                    }
                }
                return $cateArr;
            }
    }
    public function getCountCategory()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM theloai";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
    }
}
?>
