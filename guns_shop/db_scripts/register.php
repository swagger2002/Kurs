<?php
require_once "db.php";
$input = filter_input_array(INPUT_POST);

$check_user_existence_query = "SELECT * FROM users WHERE email='{$input["email"]}'";
$data = mysqli_query($con, $check_user_existence_query);

if (mysqli_num_rows($data) != 0) {
    header("Location: ../register.php?error=user_exists");
} else {
    $password = password_hash($input["password"], PASSWORD_DEFAULT);
    $save_user_query = "INSERT INTO users SET username='{$input["username"]}', surname='{$input["surname"]}', name='{$input["name"]}', fathername='{$input["fathername"]}', phone_number='{$input["phone-number"]}', email='{$input["email"]}', password='{$password}'";
    mysqli_query($con, $save_user_query);
    header("Location: ../sign-in.php");
}