<?php
$file = $_FILES["banner"];
$title = $_POST["title"];
$body = $_POST["body"];
$publish_date = $_POST["publish_date"];
$user_id = auth_user()["id"];
$banner = "";

if ($file["error"] == 0) {
    $from = $file["tmp_name"];//хранащие данные в темпе передаются на переменную $from 

    $to = "/assets/uploads/news/" . time()  . $file["name"];//хранащие данные в $from передаются на $to а тут периходят в ту папку куда указанно
    
    $uploaded_file = move_uploaded_file($from, __DIR__ . "/../.." . $to);
    //move_uploaded_file перемещает загруженный файл в новое место
    //unlink(__DIR__ . "/../.." . $uploaded_file);// тут заходим где стоит фото и удаляем к папке assets/news
    //dump($uploaded_file);

    if ($uploaded_file){
        $banner = $to;
    }
    }else {

    $_SESSION["error_message"] = "Файл не загрузился";
    header("Location: /admin/news-create.php");
    exit();
}      


$sql = "INSERT INTO `news` (`title`, `body`, `publish_date`, `user_id`, `banner`)
VALUES ('$title', '$body', '$publish_date', '$user_id', '$banner')";

//dump($sql);
$result = $db->query($sql);

$db->close();

header("Location: /admin/news.php");