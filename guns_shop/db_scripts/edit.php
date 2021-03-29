<?php
require_once "db.php";
$id = intval($_GET["id"]);
$input = filter_input_array(INPUT_POST);

$save_image_path = "images/" . $input["image-path"];

$save_service_query = "UPDATE guns_info SET guns_name='{$input["guns-name"]}', guns_caliber='{$input["guns-caliber"]}',guns_history='{$input["guns-history"]}', image_path='{$save_image_path}' WHERE id={$id}";
mysqli_query($con, $save_service_query);

header("Location: ../service.php?id=$id");