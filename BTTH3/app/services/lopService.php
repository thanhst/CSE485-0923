<?php
require_once(APP_ROOT . "/app/model/lop.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class LopService{
    public function getAllLop()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM lop";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $lopArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $row) {
                    $lop = new Lop($row["id"], $row["tenlop"]);
                    $lopArr[] = $lop;
                }
            }
            return $lopArr;
        }
    }
}
?>
