<?php
require_once(APP_ROOT . "/app/model/user.php");
require_once(APP_ROOT . "/app/model/role.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class UserService
{
    public function getUser($username)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM USERS where username=?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->execute();
            $result = $stmt->fetch();
            $user = new User($result["id"], $result["username"], $result["password"], $result["email"], $result["role"], $result["state"]);
            return $user;
        }
    }
    public function getEmailUser($usernameOrEmail)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM USERS where username=? or email=?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $usernameOrEmail);
            $stmt->bindParam(2, $usernameOrEmail);
            $stmt->execute();
            $result = $stmt->fetch();
            $user = new User($result["id"], $result["username"], $result["password"], $result["email"], $result["role"], $result["state"]);
            return $user;
        }
    }
    public function getAllUser()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $userArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $row) {
                    $user = new User($row["id"], $row["username"], $row["password"], $row["email"], $row["role"], $row["state"]);
                    $userArr[] = $user;
                }
            }
            return $userArr;
        }
    }
    public function getCountUser()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
    }
    public function setPassword($username, $email, $newPassword)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $password = password_hash($newPassword, PASSWORD_DEFAULT);
            $sql = "Update users set password = ? where username= ? and email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $password);
            $stmt->bindParam(2, $username);
            $stmt->bindParam(3, $email);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function checkPassword($username, $password)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * from users where username= ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $user["password"])) {
                    return true;
                }
            }
        }
        return false;
    }

    public function signUp($username, $password, $email, $role)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * from users where username= ? or email= ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $email);
            $stmt->execute();
            if ($stmt->rowCount() == 0) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(username,password,email,role) values(?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $username);
                $stmt->bindParam(3, $email);
                $stmt->bindParam(2, $password);
                $stmt->bindParam(4, $role);
                $stmt->execute();
                return true;
            }
        }
        return false;
    }
    public function getAllRole()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * from roles";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $roleArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $role) {
                    $roles = new Role($role["id"], $role["name"]);
                    $roleArr[] = $roles;
                }
            }
            return $roleArr;
        }
    }
    public function getState($username)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * from users where username=?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch();
                $state = new User($result["id"], $result["username"], $result["password"], $result["email"], $result["role"], $result["state"]);
            }
            return $state->getState();
        }
    }
    public function setSecurity($username)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "Update users set state = 'active' where username= ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->execute();
            return true;
        }
        return false;
    }
}
