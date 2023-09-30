<?php
    if(isset($_POST["Email"]) && isset($_POST["Mobile"]))
    {
        $Email=$_POST["Email"];
        $Mobile=$_POST["Mobile"];
        $sql="SELECT * FROM EMAIL WHERE Email='$Email' and Mobile= '$Mobile'";
        echo $sql;
        $servername = "your_servername";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_dbname";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }
        
        // Sử dụng câu lệnh chuẩn bị (prepared statement) để tránh SQL injection
        $stmt = $conn->prepare("SELECT * FROM EMAIL WHERE Email = ? AND Mobile = ?");
        $stmt->bind_param("ss", $Email, $Mobile);
        $stmt->execute();
        
        // Xử lý kết quả truy vấn
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Có kết quả từ truy vấn
            while ($row = $result->fetch_assoc()) {
                // Xử lý dữ liệu tại đây
            }
        } else {
            // Không có kết quả từ truy vấn
        }
        
        // Đóng kết nối và giải phóng tài nguyên
        $stmt->close();
        $conn->close();
    }
?>