<?php

$id = $_GET['id'];

$title = $_POST['title'];

$body = $_POST['body'];
$date = $_POST['publish_date'];
$banner = $_FILES['banner'];
$file ="";

 //проверка на ошибки и если нет ошибки то идет дальше

    $sql="SELECT * FROM  `news` WHERE `id` = '$id'";
    
    $result = $db->query($sql); // тут идет запись в Базу Данных
    
    
    $post = $result->fetch_assoc(); // тут делаем выборку чтоб узнать с какого массива удалить где
    
    //dump($post); //тут проверяем переменную для того чтобы вытащить по асоц массиву строку ['banner']
    
    $jpg= $post['banner'];// тут приравниваем взявший по асоц массиву строку ['banner'] на переменную $banner
    
    unlink(__DIR__ . "/../.." . $jpg);

if ($banner["error"] == 0) {
    $from = $banner["tmp_name"];
    $to = "/assets/uploads/news/" . time()  . $banner["name"];
    // $to = "/assets/uploads/news/" . time() . $banner["name"];
    $uploaded_file = move_uploaded_file($from, __DIR__ . "/../.." . $to);
}
if ($uploaded_file){
    $file = $to;
 
} else {
$_SESSION["error_message"] = "Файл не загрузился";
header("Location: /admin/news-create.php");
exit();
}      


//dump($_FILES);// тут надо изменять текст чтоб картинка тоже менялось 
$sql = "UPDATE `news` SET 
`title` = '$title',
`body` = '$body',
`publish_date` = '$date',
`banner`= '$file'

WHERE `id` = '$id'";

$db->query($sql);

$db->close();


$_SESSION['message'] = "<b>$title</b> изменено!";

header("Location: /admin/news.php");
