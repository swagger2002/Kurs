<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Guns Shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once "parts/header.php"; ?>
        <main class="container-fluid bg-light">
            <div class="container py-3">
                <h1 class="py-3">Регистрация</h1>
                <form method="post" action="scripts/register-handler.php">
                    <div class="form-group">
                        <label for="username">Никнейм*</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Ник, под которым вас будут видеть пользователи" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="surname">Фамилия*</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Иванов" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Имя*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Иван" required>
                    </div>
                    <div class="form-group">
                        <label for="fathername">Отчество</label>
                        <input type="text" class="form-control" id="fathername" name="fathername" placeholder="Иванович">
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Номер телефона*</label>
                        <input type="text" class="form-control" id="phone-number" name="phone-number" placeholder="Только цифры, например, '89991234567'" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Адрес электронной почты*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ivanov@example.com" required>
                        <?php if(isset($_GET["error"]) && $_GET["error"] === "user_exists"): ?>
                            <p class="text-danger pt-1">Этот e-mail уже используется.</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль*</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="**********" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark mb-2">Зарегистрироваться</button>
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