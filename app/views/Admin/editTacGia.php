<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="p-4">

    <div class="container-fluid">

        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        include "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/views/Share/header.php"; 
            $tokenArray = json_decode($_GET['token'], true);
        ?>
        <div class="menu">
            <h2>Sửa thông tin Thể Loại</h2>
            <form  method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH04/public/index.php?controller=AdminController&action=editTacGia" class="clearfix">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã tac giả</span>
                    <input name="id" readonly value="<?= $tokenArray['id'] ?>" type="text" class="form-control" placeholder="id" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên tác giả</span>
                    <input name="tenTacGia" value="<?= $tokenArray['tenTacGia'] ?>" type="text" class="form-control tenTheLoai" placeholder="" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="buttton"> 
                    <a class="btn btn-warning float-end" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/BTTH04/public/index.php?&action=tacGia">Quay lại</a>
                    <button name="submit_TacGiaLuuLai" type="submit" class="btn-save btn btn-success float-end me-2" >Lưu lại</button>
                </div>
            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>