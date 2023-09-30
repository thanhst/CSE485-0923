<?php include("../html/head.php") ?>

<body>
    <?php include("../Support/menu.php") ?>
    <?php include("../Support/header.php") ?>
    <div class="bg-none">
        <form class="form-group d-flex form-user justify-content-center align-items-center" action="" method="post">
            <div class="form-add pb-5 rounded-5">
                <h1 class="text-center mb-5 color-primary">User</h1>
                <div class="d-flex justify-content-center">
                    <div class="fill w-75">
                        <div class="infor d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <input type="text" id="addUser" name="Username" class="form-control" placeholder="Username">
                                <div class="error"></div>
                            </div>
                            <input type="text" name="Phone" class="form-control" placeholder="Mobile phone">
                        </div>
                        <div class="d-flex justify-content-start mb-3"> <input type="text" name="Email" class="form-control w-100" placeholder="Email"></div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <input type="password" name="Password" class="form-control" placeholder="Password">
                            <input type="password" name="Re-Password" class="form-control" placeholder="Xác thực password">
                        </div>
                        <div class="d-block text-center g-3">
                            <button class="btn btn-success" type="submit" class="form-control" placeholder="Password">Save</button>
                            <button class="btn btn-warning" type="reset" class="form-control" placeholder="Xác thực password">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    <?php include("../html/script.php") ?>