<?php
require_once "db.php";
$service_id = intval($_GET["id"]);
$date = date("Y-m-d");

$query = "INSERT INTO orders SET order_date='{$date}', user_id={$_SESSION["id"]}, guns_id={$guns_id}";
mysqli_query($con, $query);

header("Location: ../account-data.php");