<?php
include(APP_ROOT."/app/views/support/checkURL.php");
include(APP_ROOT."/app/views/support/head.php");
?>

<body>
    <?php include(APP_ROOT."/app/views/support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <a href="<?=DOMAIN."/public/index.php?controller=student&action=formAdd"?>"><button class="btn btn-success">Thêm mới</button></a>
        <div class="d-flex justify-content-between mt-3">
            <table class="table_infor w-100">
                <thead>
                    <tr class="border-bottom">
                        <th>#</th>
                        <th>Tên sinh viên</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Lớp</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $row) { ?>
                        <tr class="border-bottom">
                            <td><?= $row->getId()?></td>
                            <td><?= $row->getName()?></td>
                            <td><?= $row->getEmail() ?></td>
                            <td><?= $row->getBirthday() ?></td>
                            <td><?= $row->getIdClass() ?></td>
                            <td><a class="nav-link text-blue" href="<?=DOMAIN."/public/index.php?controller=student&action=updateForm&id={$row->getId()}"?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a class="nav-link text-blue" data-bs-toggle="modal" data-bs-target="#Modal<?=$row->getId()?>" href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <div class="modal fade" id="Modal<?=$row->getId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Đồng ý xóa sinh viên : <?= $row->getName() ?>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?=DOMAIN."/public/index.php?controller=student&action=delete&id={$row->getId()}"?>" class="btn btn-danger">Xóa</a>
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
    <?php include(APP_ROOT."/app/views/support/footer.php"); ?>
</body>