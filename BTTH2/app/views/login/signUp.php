<?php
include(APP_ROOT . "/app/views/support/checkURL.php");
include(APP_ROOT . "/app/views/support/head.php");
include(APP_ROOT . "/app/views/support/header.php") ?>

<body>
    <?php include("../support/header.php") ?>
    <div class="mb-5 mt-5 d-flex justify-content-center align-items-center">
        <form action="<?= DOMAIN . '/public/index.php?action=signUp&controller=user' ?>" method="post" class="form-group p-3 bg-gray rounded-3 d-flex flex-column gap-3 pb-5">
            <div class="nav-head border-bottom d-flex">
                <h2 class="text-white">Sign Up</h2>
                <div class="position-relative ms-auto">
                    <div class="icon-app fs-1 position-absolute d-flex justify-content-between gap-1 text-warning">
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-square-google-plus"></i>
                        <i class="fa-brands fa-square-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="input-group"><i class="bi bi-person-fill input-group-text"></i><input type="username" placeholder="Username" name="username" class="form-control"></div>
            <div class="input-group"><i class="bi bi-key-fill input-group-text"></i><input type="password" placeholder="Password" name="password" class="form-control"></div>
            <div class="input-group"><i class="bi bi-envelope-fill input-group-text"></i><input type="email" placeholder="Email" name="email" class="form-control"></div>
            <div class="input-group"><i class="bi bi-alt input-group-text"></i><select name="role" class="form-control">
                    <?php foreach ($roles as $role) { ?>
                        <option value="<?=$role->getName()?>"><?=$role->getName()?></option>
                    <?php } ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Lưu</button>
        </form>
    </div>
    <?php include(APP_ROOT . "/app/views/support/footer.php") ?>
</body>