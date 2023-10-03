<?php
include(APP_ROOT . "/app/views/support/checkURL.php");
include(APP_ROOT . "/app/views/support/head.php");
?>

<body>
    <?php include(APP_ROOT . "/app/views/support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <div class="nofication m-auto"><?=$message?></div>
        <form action="<?= DOMAIN . '/public/index.php?action=update&controller=student' ?>" method="post" class="m-auto form-group p-3 bg-gray rounded-3 d-flex flex-column gap-3 pb-5">
            <div class="nav-head border-bottom d-flex">
                <h2 class="text-white">Sửa sinh viên</h2>
            </div>
            <div class="input-group"><div class="input-group-text">ID</div><input type="input" name="id" value="<?=$student->getId()?>" class="form-control bg-gray" readonly style="pointer-events: none;"></div>
            <div class="input-group"><div class="input-group-text">Tên sinh viên</div><input type="name" placeholder="Tên sinh viên" value="<?=$student->getName()?>" name="nameStudent" class="form-control"></div>
            <div class="input-group"><div class="input-group-text">Email</div><input type="email" placeholder="Email" name="email" value="<?=$student->getEmail()?>" class="form-control"></div>
            <div class="input-group"><div class="input-group-text">Ngày sinh</div><input type="date" name="birthday" value="<?=$student->getBirthday()?>" class="form-control"></div>
            <div class="input-group"><div class="input-group-text">Lớp</div><select class="form-control" value="<?=$student->getIdClass()?>" name="idClass">
                <?php foreach($class as $row){?>
                    <option value="<?= $row->getId()?>"><?= $row->getId()?></option>
                <?php }?>
            </select></div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
    <?php include(APP_ROOT . "/app/views/support/footer.php"); ?>
</body>