<?php
include(APP_ROOT."/app/views/support/checkURL.php");
include(APP_ROOT."/app/views/support/head.php");
?>

<body>
    <?php include(APP_ROOT."/app/views/support/adminMenu.php") ?>
    <div class="container pt-5 pb-5">
        <a href="<?=DOMAIN."/public/index.php?controller=post&action=formAdd"?>"><button class="btn btn-success">Thêm mới</button></a>
        <div class="d-flex justify-content-between mt-3">
            <table class="table_infor w-100">
                <thead>
                    <tr class="border-bottom">
                        <th>#</th>
                        <th>Tên bài hát</th>
                        <th>Ca sĩ</th>
                        <th>Id thể loại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($post as $row) { ?>
                        <tr class="border-bottom">
                            <td><?= $row->getId()?></td>
                            <td><?= $row->getName()?></td>
                            <td><?= $row->getAuthor() ?></td>
                            <td><?= $row->getIdCategory() ?></td>
                            <td><a class="nav-link text-blue" href="../screen/editDataType.php?id=<?= $row->getId() ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
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
                                        Đồng ý xóa <?= $row->getName() ?>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="../progress/Type/deleteType.php?id=<?= $row->getId() ?>" class="btn btn-danger">Xóa</a>
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