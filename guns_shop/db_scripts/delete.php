<?php
require_once "db.php";
$id = intval($_GET["id"]);

$query = "SELECT image_path FROM guns_info WHERE id='{$id}'";
$image_data = mysqli_query($con, $query);
$image = "../" . mysqli_fetch_assoc($image_data)["image_path"];
unlink($image);

$query = "DELETE FROM guns_info WHERE id='{$id}'";
mysqli_query($con, $query);

header("Location: ../index.php");