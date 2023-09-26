<?php 
include("../connect/connect.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM theloai where ma_tloai=?";
    $stmt= $connect->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $result = $stmt->fetch();
}
?>
<?php
include("../support/head.php");
?>

<body>
    <?php include("../support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <div class="d-flex justify-content-center pb-3">
            <h1 class="fw-bold">SỬA THÔNG TIN THỂ LOẠI</h1>
        </div>
        <form class="form-group w-100 d-flex flex-column gap-3" action="../progress/Type/addType.php" method="post">
            <div class="input-group">
                <div class="input-group-text">Mã thể loại</div><input type="text" value="<?= $result[0]?>" class="form-control" disabled>
            </div>
            <div class="input-group">
                <div class="input-group-text">Tên thể loại</div><input type="text" value="<?= $result[1]?>" class="form-control">
            </div>
            <div class="ms-auto">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a class="btn btn-warning" href="../screen/theloai.php">Quay lại</a>
            </div>
        </form>
    </div>
    <?php include("../support/footer.php"); ?>
</body>