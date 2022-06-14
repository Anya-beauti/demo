<?php
$name = "Регистрация | ";
require "header.php";
?>

    <div class="w-100 text-center h3">Регистрация</div>
    <div class="d-flex justify-content-center">
        <form action="actions/register.php" class="d-flex col-12 flex-column col-sm-4 align-items-center vh-100" method="post">
            <label for="name" class="w-100">Имя</label>
            <input type="text" id="name" name="name" class="form-control mb-2" required>
            <label for="surname" class="w-100">Фамилия</label>
            <input type="text" id="surname" name="surname" class="form-control mb-2" required>
            <label for="patronymic" class="w-100">Отчество</label>
            <input type="text" id="patronymic" name="patronymic" class="form-control mb-2">
            <label for="login" class="w-100">Логин</label>
            <input type="text" id="login" name="login" class="form-control mb-2" required>
            <label for="email" class="w-100">Почта</label>
            <input type="email" id="email" name="email" class="form-control mb-2" required>
            <label for="password" class="w-100">Пароль</label>
            <input type="password" id="password" name="password" class="form-control" required>
            <label for="password_repeat" class="w-100">Повтор пароля</label>
            <input type="password" id="password_repeat" name="password_repeat" class="form-control" required>
            <div class="d-flex">
                <label for="rule" class="w-100 form-check-label">Согласие на обработку персональных данных</label>
                <input type="checkbox" id="rule" name="rule" class="form-check-input" required>
            </div>
            <input type="submit" value="Зарегистрироваться" name="submit"
                   class="btn btn-success mt-2 align-self-center">
        </form>
    </div>


<?php
require "footer.php";




?>