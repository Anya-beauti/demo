<?php

if (!empty($_POST)) {
    /** @var PDO $pdo */
    $pdo = require '../connect.php';
    if ($_POST['password'] == $_POST['password_repeat']) {
        if ($query = $pdo->prepare('INSERT INTO users(name, surname, patronymic, login, email, password) VALUES(?,?,?,?,?,?)')) {
            $query->execute([
                $_POST['name'],
                $_POST['surname'],
                $_POST['patronymic'] ?? null,
                $_POST['login'],
                $_POST['email'],
                $_POST['password'],
            ]);
            header('Location: /login.php');
        }
    }
}
