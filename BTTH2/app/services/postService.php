<?php
require_once(APP_ROOT . "/app/model/post.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class PostService{
    public function getCountPost()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM baiviet";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
    }
}