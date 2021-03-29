<?php
require_once "db.php";
$input = filter_input_array(INPUT_POST);

$check_user_existence_query = "SELECT * FROM users WHERE email='{$input["email"]}'";
$data = mysqli_query($con, $check_user_existence_query);
$db_user = mysqli_fetch_assoc($data);

if (mysqli_num_rows($data) == 0) {
    header("Location: ../sign-in.php?error=user_doesnt_exist");
} else {
    if (password_verify($input["password"], $db_user["password"])) {
        $_SESSION["id"] = $db_user["id"];
        $_SESSION["username"] = $db_user["username"];
        $_SESSION["surname"] = $db_user["surname"];
        $_SESSION["name"] = $db_user["name"];
        $_SESSION["fathername"] = $db_user["fathername"];
        $_SESSION["phone-number"] = $db_user["phone_number"];
        $_SESSION["role"] = $db_user["role_id"];
        header("Location: ../index.php");
    } else {
        header("Location: ../sign-in.php?error=wrong_password");
    }
}