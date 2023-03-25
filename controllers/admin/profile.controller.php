<?php
require __DIR__ . "/../../config/db.php";

if ($db->connect_errno) {
    echo "Bazaga ulanib bo'lmadi: " . $db->connect_error;
    exit(1);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = $_POST['password'] ? md5($_POST['password']) : $_SESSION['user']['password'];
$avatar = $_SESSION['user']['avatar'];

//echo $password . "<br>" . "<br>"; 

if ($_FILES['avatar']['error'] == 0) {
    $from = $_FILES['avatar']['tmp_name'];
    $to = "/assets/uploads/users/" . time() . $_FILES['avatar']['name'];
    //echo $to; этот код используется для просмотра пути
    $uploaded_file = move_uploaded_file($from, __DIR__ . "/../.." . $to);
    if ($uploaded_file) {
        unlink(__DIR__ . "/../.." . $avatar);
    $avatar = $to;
    }
}

$sql = "UPDATE `users` SET 
`last_name` = '$last_name', 
`first_name` = '$first_name',
 `login` = '$login', 
 `password` = '$password', 
 `avatar` = '$avatar' 
  WHERE `id` = '". auth_user()['id'] ."'";
//echo $sql;
$db->query($sql); 

$sql = "SELECT * FROM `users` 
WHERE `id` = '". auth_user()['id'] ."'";

$result = $db->query($sql);
$_SESSION['user'] = $result->fetch_assoc();
//dump($_SESSION['user']);
$result->close();
$db->close();

header("Location: /admin/profile.php");