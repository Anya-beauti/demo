<?php
require "header.php";
?>

<div class="p-5 text-center text-light mb-3 bg-dark">
    <img src="https://i.pinimg.com/564x/a9/3c/b4/a93cb4e0316ef9c4db83846550ff4deb.jpg" alt="картинка" width="100">
    <div class="">Copy Star</div>
    <div class="">Лучше нас не найти!</div>
</div>
<div class="w-100 text-center h3 mb-4">Новинки компании</div>
<div class="position-relative slider">
    <input type="radio" name="slides" id="sl1" checked>
    <input type="radio" name="slides" id="sl2">
    <input type="radio" name="slides" id="sl3">
    <input type="radio" name="slides" id="sl4">
    <input type="radio" name="slides" id="sl5">
    <div class="slides d-flex justify-content-around align-items-center mb-5">
        <div class="card border-dark bg-dark">
            <div class="bg-white d-flex align-items-center p-2 w-100" style="height: 300px">
                <img src="/media/images/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg"
                        alt="картинка" class="card-img">
            </div>
            <div class="card-body text-light">
                <a href="product.php" class="text-light">
                    <div class="card-title text-center">Принтер</div>
                </a>
            </div>
        </div>
        <div class="card border-dark bg-dark">
            <div class="bg-white d-flex align-items-center p-2 w-100" style="height: 300px">
                <img src="/media/images/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg"
                        alt="картинка" class="card-img">
            </div>
            <div class="card-body text-light">
                <a href="product.php">
                    <div class="card-title text-center">Принтер</div>
                </a>
            </div>
        </div>
        <div class="card border-dark bg-dark">
            <div class="bg-white d-flex align-items-center p-2 w-100" style="height: 300px">
                <img src="/media/images/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg"
                        alt="картинка" class="card-img">
            </div>
            <div class="card-body text-light">
                <a href="product.php">
                    <div class="card-title text-center">Принтер</div>
                </a>
            </div>
        </div>
        <div class="card border-dark bg-dark">
            <div class="bg-white d-flex align-items-center p-2 w-100" style="height: 300px">
                <img src="/media/images/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg"
                        alt="картинка" class="card-img">
            </div>
            <div class="card-body text-light">
                <a href="product.php">
                    <div class="card-title text-center">Принтер</div>
                </a>
            </div>
        </div>
        <div class="card border-dark bg-dark">
            <div class="bg-white d-flex align-items-center p-2 w-100" style="height: 300px">
                <img src="/media/images/a36b4b559ac69a6fbc40a49fcd5507884305a664.jpg"
                        alt="картинка" class="card-img">
            </div>
            <div class="card-body text-light">
                <a href="product.php">
                    <div class="card-title text-center">Принтер</div>
                </a>
            </div>
        </div>
    </div>
    <div class="slider-buttons position-absolute bottom-0 w-100 d-flex justify-content-center align-items-center">
        <label for="sl1" class="mx-2"></label>
        <label for="sl2" class="mx-2"></label>
        <label for="sl3" class="mx-2"></label>
        <label for="sl4" class="mx-2"></label>
        <label for="sl5" class="mx-2"></label>
    </div>
</div>

<?php
require "footer.php";
?>
