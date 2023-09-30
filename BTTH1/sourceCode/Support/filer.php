<?php include("../Connect/getUser.php") ?>
<div class="bg-none">
    <div class="filer bg-white ps-5 pe-5">
        <div class="filer-dropdown container-fuild d-flex justify-content-between align-items-center class-pointer pt-4">
            <div class="nav-item color-primary d-flex align-items-center">
                <a href="#" class="nav-link fw-bold">Filter</a>
            </div>
            <div class="rounded-circle mm-active text-center icon-chevron"><i class="bi bi-chevron-up text-white"></i>
            </div>
        </div>
        <form class="form-group mt-3 d-flex justify-content-between" action="" method="get">
            <input type="text" id="Email" placeholder="Email" name="Email" class="form-control w-3">
            <input type="text" id="Mobile" placeholder="Mobile" name="Mobile" class="form-control w-3">
            <select class="form-select w-3">
                <option>Select Group</option>
            </select>
            <button class="btn btn-filter" type="submit"><i class="bi bi-search"></i> <span>Filter</span></button>
            <button class="btn btn-clear" type="reset">Clear</button>
        </form>
    </div>
    <div class="page bg-white ps-5 pe-5 mt-5">
        <div class="text-left color-primary fw-bold mb-1 border-bottom pb-2 d-flex justify-content-between">User
            <div>
                <a href="../Form/addUser.php"><button class="btn btn-primary">Add user</button></a>
                <button class="btn btn-warning">Delete</button>
            </div>
        </div>
        <div class="ShowPage mt-5">
            <table class="table-user">
                <thead class="border-bottom">
                    <tr>
                        <th><input type="checkbox" class="form-check-input" disabled></th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($results as $result) {
                    ?>
                        <tr class="border-bottom">
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td> <?php echo $result['username']; ?></td>
                            <td> <?php echo $result['email']; ?></td>
                            <td> <?php echo $result['mobilephone']; ?></td>
                            <td><a class="fs-4 color-primary" href="#"><i class="bi bi-eye-fill"></i></a></td>
                            <td><a class="fs-4 color-primary" href="#"><i class="bi bi-pencil-fill"></i></a></td>
                            <td><a class="fs-4 color-primary" href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash-fill"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="wrapper mt-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if ($page > 1) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                <?php } ?>
                <?php for ($i = $page - 1; $i <= $page + 1; $i++) { ?>
                    <?php if ($i >= 1 && $i <= $totalRecords) { ?>
                        <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
                <?php if ($page < $totalRecords) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Hiển thị
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="../Connect/delete.php?userid=<?php echo $result[0]?>" class="btn btn-warning">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>