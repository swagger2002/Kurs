<?php
require_once "scripts/db.php";

if (isset($_GET["search"])) {
    $query = "SELECT * FROM services WHERE name LIKE '%{$_GET["search"]}%'";
}
else {
    $query = "SELECT * FROM services";
}

$services_data = mysqli_query($con, $query);
$services = mysqli_fetch_all($services_data, MYSQLI_ASSOC);
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
        <main class="container-fluid bg-secondary">
            <div class="container py-3">
                <div class="row justify-content-center pb-3">
                    <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 2): ?>
                    <?php endif; ?>
                </div>
                <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 2): ?>
                <div class="row justify-content-center pb-1">
                    <div class="col-auto">
                        <a href="add.php" class="btn btn-success my-1 p-3 mb-2 bg-light text-dark btn-outline-light">Добавить товар</a>
                    </div>
                </div>
                <?php endif; ?>
                <div class="row justify-content-center">
                    <?php if (count($services) > 0):
                    foreach ($services as $service): ?>
                    <div class="col-auto mx-3">
                        <div class="card my-3 shadow-sm" style="width: 18rem;">
                            <img src="<?=$service["image_path"];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=$service["name"];?> </h5>
                                <p class="card-text"><?=$service["short_description"];?></p>
                                <a href="service.php?id=<?=$service["id"];?>" class="btn btn-sm align-middle btn-outline-secondary mx-1">Подробнее</a>
                                <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 2): ?>
                                <a href="edit.php?id=<?=$service["id"]?>" class="btn btn-sm align-middle btn-outline-secondary mx-1">Редактировать</a>
                                <a href="scripts/delete.php?id=<?=$service["id"];?>" class="btn btn-dark my-2 mx-1">Удалить</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    else: ?>
                    <p class="py-1">Товары с таким названием не найдены.</p>
                    <?php endif; ?>
                </div>
            </div>
        </main>
        <?php require_once "parts/footer.php"; ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>