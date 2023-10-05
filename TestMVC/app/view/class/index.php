<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="<?= DOMAIN . '/public/img/musiclife1.png' ?>" rel="icon shortcut">
    <link rel="stylesheet" href="<?= DOMAIN . '/public/css/index.css' ?>">
    <title>Music Life</title>
</head>

<body>
    <div class="container pt-5 pb-5">
        <nav class="menu">
            <a href="<?= DOMAIN . "/public/index.php?controller=student&action=index" ?>">Chuyển trang</a>
        </nav>
        <a href="<?= DOMAIN . "/public/index.php?controller=class&action=addForm" ?>"><button class="btn btn-success">Thêm mới</button></a>
        <div class="d-flex justify-content-between mt-3">
            <table class="table_infor w-100">
                <thead>
                    <tr class="border-bottom">
                        <th>#</th>
                        <th>Tên lớp</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allClass as $row) { ?>
                        <tr class="border-bottom">
                            <td><?= $row->getId(); ?></td>
                            <td><?= $row->getName(); ?></td>
                            <td><a class="nav-link text-blue" href="<?= DOMAIN . "/public/index.php?controller=class&action=updateForm&id={$row->getId()}" ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a class="nav-link text-blue" data-bs-toggle="modal" data-bs-target="#Modal<?= $row->getId(); ?>" href=""><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        <div class="modal fade" id="Modal<?= $row->getId(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Đồng ý xóa lớp :<?= $row->getName() ?>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?= DOMAIN . "/public/index.php?controller=class&action=delete&id={$row->getId()}" ?>" class="btn btn-danger">Xóa</a>
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
    <footer class="d-flex justify-content-center align-items-center border-top">
        <h1>TLU'S Sinh vien</h1>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>