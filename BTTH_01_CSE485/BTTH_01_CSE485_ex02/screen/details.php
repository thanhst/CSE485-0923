<?php
include("../progress/getDetails.php");
include("../support/head.php") ?>

<body>
    <?php include("../support/header.php") ?>
    <div class="d-flex justify-content-center mt-5 mb-5 container">
        <div class="row container-fluid">
            <div class="col-3"><img src="<?= $result['hinhanh']?>" class="card-img-top"></div>
            <div class="col-9">
                <div class="title">
                    <h1 class="text-title"><?= $result['ten_bhat'] ?></h1></h1>
                </div>
                <div class="d-flex gap-1"><p class="fw-bold">Tên bài hát:</p><p><?= $result['ten_bhat'] ?></p></div>
                <div class="d-flex gap-1"><p class="fw-bold">Thể loại:</p><p><?= $result['ten_tloai'] ?></p></div>
                <div class="d-flex gap-1"><p class="fw-bold">Tóm tắt:</p><p><?= $result['tomtat'] ?></p></div>
                <div class="d-flex gap-1"><p class="fw-bold">Nội dung:</p><p><?= $result['noidung'] ?></p></div>
                <div class="d-flex gap-1"><p class="fw-bold">Tác giả:</p><p><?= $result['ten_tgia'] ?></p></div>
            </div>
        </div>
    </div>
</body>
<?php include("../support/footer.php") ?>

</html>