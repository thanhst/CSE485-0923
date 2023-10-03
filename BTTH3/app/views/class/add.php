<?php
include(APP_ROOT . "/app/views/support/checkURL.php");
include(APP_ROOT . "/app/views/support/head.php");
?>

<body>
    <?php include(APP_ROOT . "/app/views/support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <div class="nofication m-auto"></div>
        <form action="<?= DOMAIN . '/public/index.php?action=add&controller=class' ?>" method="post" class="m-auto form-group p-3 bg-gray rounded-3 d-flex flex-column gap-3 pb-5">
            <div class="nav-head border-bottom d-flex">
                <h2 class="text-white">Thêm lớp</h2>
            </div>
            <div class="input-group"><div class="input-group-text">Tên lớp</div><input type="name" placeholder="Tên lớp" name="nameClass" class="form-control"></div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
    <?php include(APP_ROOT . "/app/views/support/footer.php"); ?>
</body>