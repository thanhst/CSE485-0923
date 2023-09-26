<?php
include("../progress/getType.php");
include("../support/head.php");
?>

<body>
    <?php include("../support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <a href="../screen/addDataType.php"><button class="btn btn-success">Thêm mới</button></a>
        <div class="d-flex justify-content-between mt-3">
            <table class="table_infor w-100">
                <thead>
                    <tr class="border-bottom">
                        <th>#</th>
                        <th>Tên thể loại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) { ?>
                        <tr class="border-bottom">
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><a class="nav-link text-blue" href="../screen/editDataType.php?id=<?= $row[0] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a class="nav-link text-blue" data-bs-toggle="modal" data-bs-target="#Modal<?=$row[0]?>" href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <div class="modal fade" id="Modal<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Đồng ý xóa <?= $row[1] ?>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="../progress/Type/deleteType.php?id=<?= $row[0] ?>" class="btn btn-danger">Xóa</a>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include("../support/footer.php"); ?>
</body>