<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $name ?? "" ?>Интернет-магазин</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="d-flex flex-column flex-sm-row align-items-center bg-dark text-light px-2 py-2 mb-5">
    <div class="d-flex col-sm-4 col-12 justify-content-center justify-content-sm-start h-100 align-items-center">
        <a href="index.php" class="text-light"><img
                    src="https://i.pinimg.com/564x/a9/3c/b4/a93cb4e0316ef9c4db83846550ff4deb.jpg" alt="картинка"
                    width="20px" class="m-1">
            Copy Star</a>
    </div>
    <div class="d-flex col-sm-4 col-12 justify-content-center">
        <a href="index.php" class="link-light p-2">О нас</a>
        <a href="catalog.php" class="text-light">
            <div class="p-2">Каталог</div>
        </a>
        <a href="where.php" class="text-light">
            <div class="p-2">Где нас найти?</div>
        </a>
    </div>
    <div class="d-flex col-sm-4 col-12 align-items-center justify-content-center justify-content-sm-end justify-content-end">
        <?php if (isset($_SESSION["id"])) { ?>
            <div class="me-1">
                <?= $_SESSION["login"] ?>
            </div>
            <a href="logout.php">
                <div class="text-light btn bg-danger me-1">Выйти</div>
            </a>
            <?php } else { ?>
            <a href="login.php">
                <div class="text-light btn bg-success me-1">Войти</div>
            </a>
            <a href="register.php">
                <div class=" text-light btn bg-success">Регистрация</div>
            </a>
        <?php } ?>
    </div>

</div>

