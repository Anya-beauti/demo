<?php
if (!empty($_POST)) {
    /** @var PDO $pdo */
    $pdo = require '../connect.php';
    if ($query = $pdo->prepare("SELECT * FROM `users` WHERE login=?")) {
        $query->execute([
            $_POST['login'],
        ]);
        if ($user = $query->fetch()) {
            if ($user["password"] == $_POST["password"]) {
                session_start();
                $_SESSION["id"] = $user["id"];
                $_SESSION["login"] = $user["login"];
                header('Location: /', true);
            }
        }
    }
}
