<?php
include(APP_ROOT."/app/views/support/checkURL.php");
include(APP_ROOT."/app/views/support/head.php")?>

<body>
    <?php include(APP_ROOT."/app/views/support/adminMenu.php") ?>
    <div class="d-flex justify-content-between container pt-5 pb-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Người dùng</h6>
                <h5><?= $user?></h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Thể loại</h6>
                <h5><?= $category?></h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Tác giả</h6>
                <h5><?= $author?></h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h6 class="card-title text-blue">Bài viết</h6>
                <h5><?= $post?></h5>
            </div>
        </div>
    </div>
    <?php include(APP_ROOT."/app/views/support/footer.php"); ?>
</body>