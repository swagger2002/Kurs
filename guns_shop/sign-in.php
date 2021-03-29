<!DOCTYPE html>
<html lang = ru>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Guns Shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once "parts/header.php"; ?>
        <main class="container-fluid bg-light">
            <div class="container" style="padding-top: 13%; padding-bottom: 13%;">
                <form method="post" action="scripts/sign-in-handler.php" class="form-signin">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <h1 class="h3 mb-3 font-weight-normal">Вход в аккаунт</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="form-group py-1">
                                <label for="email" class="sr-only">Адрес электронной почты</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Адрес электронной почты" required autofocus>
                                <?php if(isset($_GET["error"]) && $_GET["error"] === "user_doesnt_exist"): ?>
                                <p class="text-danger pt-1">Такого пользователя не существует.</p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group py-1">
                                <label for="password" class="sr-only">Пароль</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required>
                                <?php if(isset($_GET["error"]) && $_GET["error"] === "wrong_password"): ?>
                                <p class="text-danger pt-1">Неверный пароль.</p>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-dark btn-block">Войти</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <?php require_once "parts/footer.php"; ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>