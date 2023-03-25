<?php
require __DIR__ . "/../../config/db.php";
// echo "<pre>";
// print_r($db);
// echo "</pre>";
// // echo __DIR__;
//  exit();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = "SELECT * from `users` 
where `login` = '$login' and `password`= '$password'";

$result=$db->query($sql);

if($result->num_rows<1) {
    $_SESSION["error_message"] = "Неправельный логин или пароль"; 
    header('location: /login.php');
    exit(1);
    }

$user = $result->fetch_assoc();
$result->close();
$db->close();

$_SESSION['user'] = $user;

header('location: /admin/index.php');
// echo "<pre>";
// print_r($result->fetch_assoc());
// echo "</pre>";