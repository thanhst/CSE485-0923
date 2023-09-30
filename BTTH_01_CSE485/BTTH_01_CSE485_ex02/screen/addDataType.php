<?php
include("../progress/login/issetSession.php");
include("../support/checkURL.php");
include("../support/head.php");
?>

<body>
    <?php include("../support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <div class="d-flex justify-content-center pb-3">
            <h1 class="fw-bold">THÊM THỂ LOẠI</h1>
        </div>
        <form class="form-group w-100 d-flex flex-column gap-3" action="../progress/Type/addType.php" method="post">
            <div class="input-group">
                <div class="input-group-text">Tên thể loại</div><input type="text" name="typeName" placeholder="Tên thể loại" class="form-control">
            </div>
            <div class="ms-auto">
                <button type="submit" class="btn btn-success">Thêm</button>
                <a class="btn btn-warning" href="../screen/theloai.php">Quay lại</a>
            </div>
        </form>
    </div>
    <?php include("../support/footer.php"); ?>
</body>