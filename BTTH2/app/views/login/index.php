<?php
include(APP_ROOT."/app/views/support/checkURL.php");
include(APP_ROOT."/app/views/support/head.php");
include(APP_ROOT."/app/views/support/header.php")?>

<body>
    <?php include("../support/header.php") ?>
    <div class="mb-5 mt-5 d-flex justify-content-center align-items-center">
        <form action="<?=DOMAIN.'/public/index.php?action=postLogin&controller=user'?>" method="post" class="form-group p-3 bg-gray rounded-3 d-flex flex-column gap-3 pb-5">
            <div class="nav-head border-bottom d-flex">
                <h2 class="text-white">Sign in</h2>
                <div class="position-relative ms-auto">
                    <div class="icon-app fs-1 position-absolute d-flex justify-content-between gap-1 text-warning">
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-square-google-plus"></i>
                        <i class="fa-brands fa-square-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="input-group"><i class="bi bi-person-fill input-group-text"></i><input type="username" placeholder="Username" name="Username" class="form-control"></div>
            <div class="input-group"><i class="bi bi-key-fill input-group-text"></i><input type="password" placeholder="Password" name="Password" class="form-control"></div>
            <div class="input-group text-white"><input type="checkbox" class="form-check-input me-1">Remember me</div>
            <div class="button d-flex justify-content-end"><button type="submit" name="Login" class="btn btn-warning">Login</button></div>
            <div class="sign-up m-auto">
                <div class="fs-small d-flex gap-1">
                    Don't have an account? <span><a href="<?=DOMAIN.'/public/index.php?action=signUpForm&controller=user'?>" class="text-warning text-decoration-none">Sign Up</a></span>
                </div>
                <div class="forgot-pass">
                    <a href="<?=DOMAIN.'/public/index.php?action=forgetForm&controller=user'?>" class="text-warning nav-link">Forgot your password?</a>
                </div>
            </div>
        </form>
    </div>
    <?php include(APP_ROOT."/app/views/support/footer.php")?>
</body>