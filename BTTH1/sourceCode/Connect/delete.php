<?php
include("../Connect/connect.php");
header("Location:http://localhost/W3CMS/sourceCode/User/");
if(isset($_GET['userid'])){
    $sqlDelete="DELETE FROM user where username = 'hgraybeal0'";
    $stmt=mysqli_query($conn,$sqlDelete);
    $rowCount=mysqli_num_rows($stmt);
}
?>