<?php

$id = $_GET['id'];// тут изГлобальнойПеременнойГет Вытаскивае 'id' и передаем в переменную $id ,,,,




$sql="SELECT * FROM  `news` WHERE `id` = '$id'";

$result = $db->query($sql); // тут идет запись в Базу Данных





$post = $result->fetch_assoc(); // тут делаем выборку чтоб узнать с какого массива удалить где

//dump($post); тут проверяем переменную для того чтобы вытащить по асоц массиву строку ['banner']

$banner= $post['banner'];// тут приравниваем взявший по асоц массиву строку ['banner'] на переменную $banner

unlink(__DIR__ . "/../.." . $banner);// тут заходим где стоит фото и удаляем к папке assets/news


//dump($banner);

$sql = "DELETE FROM  `news` WHERE `id` = '$id'"; // тут удаляем по выбору id

$result = $db->query($sql); // тут идет запись в Базу Данных

$db->close(); // тут закрываем Базу Данных

//$post = $result->fetch_assoc();

//dump($id);

header("Location: /admin/news.php"); // Перенаправляем в часть колонки

//require __DIR__ . "/../../views/admin/news/edit.view.php";