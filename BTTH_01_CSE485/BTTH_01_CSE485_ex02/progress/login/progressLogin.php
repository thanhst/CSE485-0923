<?php 
include("../../connect/connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Login"]))
{
    if(isset($_POST["Username"]) && isset($_POST['Password']))
    {
        $username=trim($_POST['Username']);
        $password=trim($_POST['Password']);
        $sql_check = "SELECT * FROM user WHERE username=?";
        $stmt=$connect->prepare($sql_check);
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount()> 0)
        {
            $user=$stmt->fetch(PDO::FETCH_ASSOC);
            $pass_hash=$user["password"];
            if(password_verify($password, $pass_hash))
            {
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location:../../screen/trangchu.php");
            }
            else if($password== $pass_hash)
            {
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location:../../screen/trangchu.php");
            }
            else{
                header("Location:../../screen/login.php?error=not-matched-password");
            }
        }
        else{
            header("Location:../../screen/login.php?error=not-existed");
        }
    }
    else{
        header("Location:../../screen/login.php");
    }
}
else{
    header("Location:../../screen/login.php");
}
?>
