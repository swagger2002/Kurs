<?php
require_once "db.php";
$input = filter_input_array(INPUT_POST);

$save_image_path = "images/" . $input["image-path"];

$save_service_query = "INSERT INTO guns_info SET guns_name='{$input["guns_name"]}', guns_caliber='{$input["guns-caliber"]}', guns_history='{$input["history"]}', image_path='{$save_image_path}'";
mysqli_query($con, $save_service_query);

$last_id_check_query = "SELECT id FROM guns_info ORDER BY id DESC;";
$id_data = mysqli_query($con, $last_id_check_query);
$last_id = mysqli_fetch_all($id_data, MYSQLI_ASSOC)[0]["id"];

header("Location: ../service.php?id=$last_id");