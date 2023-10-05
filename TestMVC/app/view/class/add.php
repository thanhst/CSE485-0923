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
        <div class="nofication m-auto"></div>
        <form action="<?= DOMAIN . '/public/index.php?action=add&controller=class' ?>" method="post" class="m-auto form-group p-3 bg-gray rounded-3 d-flex flex-column gap-3 pb-5">
            <div class="nav-head border-bottom d-flex">
                <h2 class="text-white">Thêm lớp</h2>
            </div>
            <div class="input-group"><div class="input-group-text">Tên lớp</div><input type="input" placeholder="Tên lớp" name="nameClass" class="form-control"></div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
    <footer class="d-flex justify-content-center align-items-center border-top">
        <h1>TLU'S Sinh vien</h1>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>