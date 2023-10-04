<?php
require_once(APP_ROOT . "/app/model/author.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class authorService{
    public function getCountAuthor()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM tacgia";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
    }
}