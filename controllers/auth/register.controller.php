<?php

require __DIR__ . "/../../config/db.php";
// echo "<pre>";
// print_r($db);
// echo "</pre>";

// if ($db->connect_errno) {
//     echo "Bazaga ulanib bo'lmadi: " . $db->connect_error;
//     exit(1);
// }
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = md5($_POST['password']);//паролни шифровка килади

$check_sql = "SELECT id from `users` where login = '$login'";

$result= $db->query($check_sql);
if ($result->num_rows>0){
    $_SESSION["error_message"] = "Такой пользователь существует"; 
    header('location: /register.php');
    exit();
}


// echo "<pre>";
// print_r($result->num_rows);
// echo "</pre>";
// exit();
$sql = "INSERT into `users` (`last_name`, `first_name`, `login`, `password`) 
VALUES ('$last_name', '$first_name', '$login', '$password')";
$result = $db->query($sql);

$db->close();

header('location: /login.php');