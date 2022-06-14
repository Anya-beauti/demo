<?php
$name = "Авторизация | ";
require "header.php";
?>

<div class="w-100 text-center h3">Авторизация</div>
<div class="d-flex justify-content-center">
    <form action="actions/login.php" class="d-flex col-12 flex-column col-sm-4 align-items-center vh-100" method="post">
        <label for="login" class="w-100">Логин</label>
        <input type="text" id="login" name="login" class="form-control mb-2">
        <label for="password" class="w-100">Пароль</label>
        <input type="password" id="password" name="password" class="form-control">
        <input type="submit" value="Войти" name="submit" class="btn btn-success mt-2 align-self-center">
    </form>
</div>


<?php
require "footer.php";



?>