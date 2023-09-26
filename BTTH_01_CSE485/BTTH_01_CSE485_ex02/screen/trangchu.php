<?php
include("../progress/countInfor.php");
include("../support/head.php");
?>

<body>
    <?php include("../support/adminMenu.php") ?>
    <div class="d-flex justify-content-between container pt-5 pb-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Người dùng</h6>
                <h5><?= $user[0]?></h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Thể loại</h6>
                <h5><?= $theloai[0]?></h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Tác giả</h6>
                <h5><?= $tacgia[0]?></h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Bài viết</h6>
                <h5><?= $baiviet[0]?></h5>
            </div>
        </div>
    </div>
    <?php include("../support/footer.php"); ?>
</body>