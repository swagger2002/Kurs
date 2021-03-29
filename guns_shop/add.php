<?php
require_once "scripts/db.php";
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ЭкзоТипограф</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once "parts/header.php"; ?>
        <main class="container-fluid bg-light">
            <div class="container py-3">
                <h1 class="py-3">Добавление услуги</h1>
                <form method="post" action="scripts/add-handler.php">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Название услуги" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="short-description">Краткое описание</label>
                        <textarea class="form-control" id="short-description" name="short-description" rows="3" placeholder="Краткое описание, отображаемое в карточке услуги" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Полное описание</label>
                        <textarea class="form-control" id="description" rows="20" name="description" placeholder="Полное описание, отображаемое на странице услуги; допустимо использование html-кода" required></textarea>
                      </div>
                    <div class="form-group">
                        <label for="image-path">Фотография</label>
                        <input type="file" class="form-control-file" id="image-path" name="image-path" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mb-2">Добавить</button>
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