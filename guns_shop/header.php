<header class="container-fluid">
    <nav class="navbar navbar-white" style="background-color: #ffffff;">
        <a href="index.php" class="navbar-brand text-dark">
            <img src="images/submachine-gun.svg" width="30" height="30" class="d-inline-block align-top" alt="Логотип сайта">
            Guns Shop
        </a>
        <div class="bg-danger">
            <script>
                document.write('<div id="contHour"></div>');
                mainDate = new Date();
                myHour = mainDate.getHours();

                if (myHour >= 7 && myHour < 12) {
                    document.getElementById("contHour").innerHTML = '<p class="text-light">УРА! СЕГОДНЯ ДЕНЬ БЕСПЛАТНОЙ ДОСТАВКИ!</p>';
                } else if (myHour >= 12 && myHour < 19) {
                    document.getElementById("contHour").innerHTML = '<p class="text-light text-center">ВЫ ВОВРЕМЯ ЗАШЛИ НА САЙТ! ПРИ ПОКУПКЕ ЛЮБОГО ОРУЖИЯ ПАТРОНЫ В ПОДАРОК!</p>';
                } else if (myHour >= 19 && myHour < 24) {
                    document.getElementById("contHour").innerHTML = '<p class="text-light">ПОКАЖИТЕ КАССИРУ КОД: 6565 И ПОЛУЧИТЕ СКИДКУ НА СЛЕДУЮЩИЙ ЗАКАЗ ПРИ САМОВЫВОЗЕ!</p>';
                } else if (myHour >= 0 && myHour < 7) {
                    document.getElementById("contHour").innerHTML = '<p class="text-light">В ПОДАРОК К ЗАКАЗУ ВЫ ПОЛУЧАЕТЕ </p>';
                };
            </script>
        </div>

        <form class="form-inline ">
            <?php if (!isset($_SESSION["role"])): ?>
            <a href="sign-in.php" class="btn btn-dark align-middle  mx-1">Войти</a>
            <a href="register.php" class="btn btn-dark align-middle  mx-1">Регистрация</a>
            <?php else: ?>
            <a href="account-data.php" class="btn btn-dark align-middle  mx-1">Личный кабинет</a>
            <a href="../scripts/sign-out-handler.php" class="btn btn-dark align-middle  mx-1">Выход</a>
            <?php endif; ?>
        </form>
    </nav>
</header>