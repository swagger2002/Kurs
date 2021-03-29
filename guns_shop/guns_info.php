<?php
require_once "scripts/db.php";
$id = intval($_GET["id"]);

$query = "SELECT * FROM services WHERE id={$id}";
$service_data = mysqli_query($con, $query);
$service = mysqli_fetch_assoc($service_data);

$query = "SELECT comments.id, comments.text, comments.date, users.username FROM comments JOIN users ON users.id = comments.user_id WHERE comments.service_id={$id}";
$comments_data = mysqli_query($con, $query);
$comments = mysqli_fetch_all($comments_data, MYSQLI_ASSOC);
?>

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
                <div class="row pb-3 pt-1">
                    <h1><?=$service["name"];?></h1>
                </div>
                <div class="row pb-3">
                    <div class="col">
                        <?=$service["description"];?>
                    </div>
                    <div class="card mb-3 shadow-sm align-self-start" style="width: 320px;">
                        <img src="<?=$service["image_path"];?>" width="320" height="240" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$service["name"];?></h5>
                            <p class="card-text"><?=$service["short_description"];?></p>
                            <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 1): ?>
                            <a href="scripts/order.php?id=<?=$service["id"];?>" class="btn btn-dark align-middle btn-lg btn-block my-1">Заказать</a>
                            <h3> 10 000 руб.</h3>
                            <?php elseif (isset($_SESSION["role"]) && $_SESSION["role"] == 2): ?>
                            <a href="edit.php?id=<?=$service["id"];?>" class="btn btn-dark align-middle  mx-1">Редактировать</a>
                            <a href="scripts/delete.php?id=<?=$service["id"];?>" class="btn btn-dark align-middle btn-lg btn-block my-1">Удалить</a>
                            <?php else: ?>
                            <a href="register.php" class="btn btn-dark align-middle btn-lg btn-block my-1">Зарегистрируйтесь и сделайте заказ прямо сейчас!</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <h4 class="pt-2">Комментарии</h4>
                    </div>
                </div>
                <?php if (isset($_SESSION["role"])): ?>
                <div class="row pt-3">
                    <div class="col">
                        <form method="post" action="scripts/add-comment-handler.php?id=<?=$service["id"];?>">
                            <div class="form-group">
                                <label for="text" class="sr-only">Комментарий</label>
                                <textarea class="form-control" id="text" name="text" rows="3" placeholder="Оставьте комментарий..." required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark align-middle mb-2">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row py-2 justify-content-center">
                    <div class="col">
                        <?php if (count($comments) > 0):
                        foreach ($comments as $comment): ?>
                        <hr>
                        <p class="pt-2 text-secondary float-right"><?=date("d.m.Y", strtotime($comment["date"]));?></p>
                        <h5 class="pt-2"><b><?=$comment["username"];?></b></h5>
                        <p><?=$comment["text"];?></p>
                        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 2): ?>
                        <a href="scripts/delete-comment.php?id=<?=$comment["id"];?>&service-id=<?=$service["id"];?>" class="btn btn-dark align-middle my-1">Удалить</a>
                        <?php endif; ?>
                        <?php endforeach;
                        else: ?>
                        <p>К данному товару никто ещё не оставлял комментариев.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once "parts/footer.php"; ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>